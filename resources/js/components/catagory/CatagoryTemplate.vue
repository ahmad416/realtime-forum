<template>
    <div class="catagorytemplate">
        <v-container text-center class="my-5">
            <v-layout row wrap>
                <v-flex xs12 md4 text-center>
                    <v-card 
                    class="mt-5"
                    height="300px"
                    width="300px"
                    > 
                        <v-layout row wrap>
                            <v-flex xs6 md6 offset-xs3 offset-md3 class="mt-4">
                                <v-img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAAC9FBMVEUAAAANR6JbsfgNSKENSKINR6JKp/dGqf5Hqvz+yipCpvVCpvb/2TdGqPdGq/dCpvZDpvdCpvb/yyhDpvdCpvb/ziv/0S7/5T1CpvZDp/ZCpvVDpvZCpvVDpvb/zSpFqfn/zzBDpvZEp/b/0i//yyhCpvZEpvj/ziz/yypFqflCpvZCpvVCpvb/yyn/yyr/zSxHqPhCpvZCpvX/zCn/yylBpfdCpvb/yyhDpvZDpvZDpvf/yylDpvb/yylCpvZDpvf/zCkNR6L/yyr/zClDpvX/zSlEp/f/yylDpvb/yyj/zCn/zClEqPoNR6L/yyn/yyhFp/dFp/UNR6IPSqRotvAUVa5ltvf/yygeiucQSaQPSqQSS6YOSKJEpvf/yykPSqMdiecNSKIhiORltvcdieYTS59ktvdltvhmt/hluPo6X4sdieYUSp9ktvcdiecOSKIOSKNmtvgOSKMdieYOSKQfi+cdieb/00lmtvfVw1cbX7hOa4H/+eH/////1VH/2GH/44r/4HYhi+n//////////////////////vX//vj/+N////8NR6HP2NxktfYdiOX/yiiwvsXd4+ZCpfX///+BnsXG0daGo8bwwjATT6eOqMhYcHy0oU5Jk9xOeLWvv9Jbgrh6mMPU3OBVfLfEztR3lb1ih7t+m75xkLvNr0LtwDG5xszG0d0dZ74UTKIdU6Z7l7oPSaLM1tvJ1Nnb4uUjV6iqvNJcsPXBzdlQqPFrjb7R2t60xNU7aa+0wshBbrApXKr//vfY4ONXrPK/ytChts+bss2WrcmktsQtkukjjOcvYKs9nO0ZXrY3Zq1Gou81mOu6ydesu8VHc7P/zzmludHlvDUaftv/9M+Kpcf/77xdg7kyY63/++1xksD/4H//1lf/00v/+N6Qp7//6aJnibZGZoT/22ielllghbtSbH9ue3EXcMz/66z/44tYcXwnar3WtD3c4uZKdLGAhWeUkV3Gq0VAiNKIo8gydcUjU5ZCY4dstMAUAAAAjHRSTlMAsAXU7JoLERj804IJTB2qefjkWPQuFgS9Ue/mnYtAKR9sNhDu4kUm1iz86sSigzch3LdqXyXYsZJxY7qwqaOXR+DIc2hOP/TNwYxXMfiZkzo0xbld/eXOWT8lGGZdejOdg2qyqqagiEIy/NbOxMGRdmpXhks+6cN4/NnFuq2kmIE7Mi3ZysbBsKxIP2YALHcAABcdSURBVHja1NnJTxNhGMfxn2PtRjcppbQUlGorln2pSFlEAQXcl2iURKLGNRrjzei/0LRP8nDQiP+ABxNPhKPxpDGRgyHGxKDGiNGoMVHPztRqizMtnZli9ZNA0kvh22fed962WEKrL2aEva3av7q6v6J6U+NmwBw04T9j7vUzsxsuFlX3sqjCCCtzqN2N/0Vwsw9hZn9VmQkwm00CYHRs3NcK1I1UMG+C4HQORfGPM9ZZmauAXQ4oitqjMIk5HAqjpA5dPYd8+pkbaszIzzHkbOAyrAnETCgN4VIikTiDHAR3FG6nT0AhWoFu5tW9PpTCocThs4nEeSgKWrkXagixqgizAyVwNnEWpxKHoKQswqH9UMk85AKsm7pNUEn/RM7kmIiPOWCCJiPMqwNm/FWnEglxKEocgTC0srdHuAx/17krSvNY0x+ELq11ZnSPxAQUma2lY7hSxb9RzS7otpk51G1EMQ2Xk2jMhsKY27jRCN0Et5W5H0XUSfRyfsFCPShMI1tNKAp7+xBMdgHFUbmePk5OTj57SnubmwY9WJLVakbx1HCbG5p4AVQODw/UpldFBy1MSj4SFXaFCSimjVbmkV1QaaBptNxS78UREq0Hmkf3dvbRm1TIfcvTTx/nLbQX+ZidYWQ5umrlbsOBVRPQToiFuArZjp6+aDCsvHwUCtYNNI922bCNRD1AZ1dXz+gYxMeS55Mpb+6Lv15bqAV5BHgzfjt2IJ52cBzaGYeCWFNnLORJB1MTsGFDZ+1aLzJstYN966WJZHyiZuS2n1dHM6+cIf6bYQK6BLjaLXvSrRNZo9jZV78Bx3eMNg+vg6JBms8OeU5deXesmsw8DPEshnHo0drIXOUAju2OZ9k6/iujy0JkaUE+tfQqO+RNvkUS5QYTfjkYF72dmpubepu6EKBPrIG3QEhdV++n7sxNXYiLVkDUUokBotGOtcjLW07PMh33X1Incivbnrmw4qKvlPI1XkzfSGL5EBdNVA7WUw8g7rFLGqP5TMcCHfGiIKukeVDa2yJ23KKfLNJMrluIyneiIB56+iLd8fol7diAnOqcAn5bKf6ZKUqbKmLId0p7Jz64YOkaRqF66NPPjHki6kBOxgo24zdpqc9R2lzxOu5ZKO2LtNwrUTgPWV5Mvvi4QETltMODXNw8AlnIMpJCVkKNPlpYkLa3Jg+aqHwtcnCyCxkHUpfWcnqX2rbU2GAhaXuTpugdpSM2KPNzVLbYl016sZ+AKmN9nVKFZF09eaDMuQVZJtLb7/JIb7/3jkEzWy3ykt0QSXTjVtF8Jkn6hngauiiPxNyKRca3xlNSIfHiIdGdeMrWcZ1vGQehoM2PxSYMyxxy8yR0qaVyG2Qc7Mcfxg8ua8i1x1wGXY4onbfC3AiZ7JC7t/XLDjHAFeFe5GB09duxlJ1UD5khDuQPuZnQb3EIwg1shrIAM4exBG+9ZZ384Mvdfz0EpjXiD5SEmLkGS1nbAhmHy/TXQyQ1EZfyMYPZB41KEuKOcECAjCnQ2I2lDfTITp1BX2lC4KvQ8cnmmPxW0hYxliYEu0K8T/s9sU9+ZNS9RqYfzDyYVh8CUxhaeeQbcAXrmsj0k4fJlEezMypDJLGQHVp4d9A6LLaaBe0h04+TWR7OqA6p40gMWvTJTil+PzSHzDxKLjarNgRlzC5tM5HtWkHNIU+SMg+nVYZgKMIbURxaQ6QOeYnaEIRrjFDPUz+AxcJ1GkNmkopmVYZI9rkEqNQh++TUyg5NIdOPkspm1If0crtRdcge2dfjQU0hs8kcHqoP2djAVSpLOqkJi1WxXUvIg2ROM6pDsKaa2/WG9HNMS8hs7pBZ9SGI/mDWbFYTBoIAPOxBbdRg/emPgo3F4g+0aIqlLYJFqrXYQ/oCvpKBfZiQc0+VgD5Sm2PZ7JjZkeJ39/A5M7uzkxneEIu9fQ9/KcmKgUiw1rMxEAGRASbCAwOR7RohIIvECMtly9BFvjGR0ExkSKn4WbemvHVNnrprjC0ugqyQuAJScqsOUvqngizyhYpEZiLx2ZWHlLz7TeVlJXtkkZAloqXnpm7qy76jXquVYxH5RQwgFSf+uToPyh+RSClldk3Vr+1z2TpwjWwZIvO+bIEhWd6pRT9+UZ5lv3Is90jAEImTqw57uSufgUKxcU0WiVgtCs5rKc2h1Un6CybcXoveNOJ8ZgDF8dtJ9SUtXISYWyFb5GrfVuIycUVIVGWO/h5BMostIix5IfCJ6Qpi1LcVKkILScQXAbuBL6q+TB1IoLgYoCK0kARckZiPqvT+axy0Y05RcLxHpN4LHe3PBCZCCklAEMGxs/oevqY5ueUTUSQmwiqELyLqDVsTkDffgUQu5cJAJEADwo+IK63k9Jr5U/3Glk0UidlhAeGLZB/kWJNZK/2mU8tAJFTvkIAmgjOqJ38X7fod/e7ZhCoSgwaELwLeeAQJNJdI85wzEdkg3QlDhL2xz49IcHARS+m6Cj+0m0mLE0EYhl1wARFxARERUVAYRA8eRLyoZzcQ5qCI4sGbIIg/o4rYHaIYME7acYGMCUk6sU33xNDZXIgawyCSwYt4UATFi3qz3q+STkS7qgf0uUyTnlTq+d5aknT6xKFFClatWrhIXSlSv/n9Z2dycrLT+fqVCb4IPom/xxYvgJOigcNLL5y5cnrse/jdKpHN8QmtiH4jeRlYfO/k2T9l6flzw6l+RCVyML5loSKPYmGr1iNE8O85eQo/RL+6bqNKZHt815KFidSfxf5uUv+ZZ/+JxacXHb+6RzOr4jsVItoruoFJ/eYNJplKznUdr/njMZPMezNRcVJM8jzR8pxuuV3JMuLYmbP43a+KTfu2KkSif2j/LOPoe745xCpLl9ItMxozL+T/t1xziO2kGXHpny6/D0M/Vj1goDdj/o5XY4JsK5JHt8Twui3b/A2rIoeXdmvZvlUpoh9WyIOBsvkHdoJMPFMPJ+nb/l+SyuHMMp3Ihl3L1SL6L0zfYFzlZBy2Zbmcc9fyZWXLNFpwTo1P4zBhUxu+5bqiDdHINwplFufOaO+o3BZJ5GW4xw301SILPoZL1XWY4IVrafjIBG1S+q0RC2p2T5zMn1KLrI/vU4joPEAHr4KaW5y41Uo2PU5AZY5KzdVQcO/QZ5cDp5lsl4uBil/T3+uwZEd8tV7kUSw8EJofiIMspnIM1CoOFyCnNAZekSvBwOrZg1oU03L9yqZalKx4vJDVD65t8QNakXpMHUhKeFAX+qNd8UZ60Au7hGpzFS0m4AOPdokF9LqDYJP4Tbpm5ZrQDq2HzzSBFKSHg0qOuF2UJmW0p4xkFqoDjzQbp1SWJnYuwnxfskIjgv1DtYVUBnlIj1r//u2cNKFMvtnz4ng2FU4POVrSI8FAPlX5IFvLedKkGeGmwoNrJxQimsvrk4wxR/ZhijSeGOB9NpjjltlieqZMn2Y9nNgdA7ymJfl5AdUwfbxVWa67eXuNSuShygMjK2v7wcrTN4bMopzXcMLmTE/ZDGZ9DrUg7o1VA2/ELqtFVq6NTyhEXqlEsKlXvtGamUL5jBGorZzwZo1psSjUJm0nRgBCLnFgz0XY3vcjkhARrLyaKdKkQIoYTKhlpjHdyGB0YWbITlSgmwzjLVKQgdzFIBPPrTampzNVcZBDWBTJTIS7zVZu2Bwu8lQr4rnDYr4QGgVOWkKFCYrUiR/i6DoPwxNnH/sczFMxqtc40TCM+5gxHLji6KL2WtHRUBEEotlFHA5Q1/tGgw/J0CzxqA9N6k4YOHvX4gABGFXUgpg22uKBj1Ik4lWWEBEEolu0uny4/t/L8BFVTJo5DjC+a6kwIJx2OchDpMgDGk9oFQcWli2tx/Ide/8uUo/pE2kGiVSu8RGNeUoEJJiOPg8SGS9GYZSIg71dH8gv5s7tp2kojuO1KmIUvF/xEq9RQTEa7/d4j1c0xqkxIsEnDBpvf4DPa7qlYVNjuGSAl8UNSkYWwjYelJkQMYNgQjC8GAzqkzG+6Iv9nfa3Fnva49YE+T4QeliTfvo753freiiUFtBAwGUx10hVeoJ0CAalILCpdzfA4sAzgf2JYFB1elK24hphZVxbeRMIxhBWYFeX92PDRaAHimFOyFLIdA5Rewi9lpBkey0Qv1VaZgLBoM6IIwn95oWjAqpPjSMgGWbMUJOl4GprcDGRk1AxEkeI2gxxpHiJTRtCmmYCwaXOiOzN6tXXwPmxFFYYET1774RfvdYCgw3qtguhXVtqDbVMlyGyr1zJWSsv3wSCM4vltvoFogGS5Pnh4n1tYA+MHVD+VduAQLDo1vhJjladIvwdpJ8kY7DBXGvzGc/RE3Mz6qK8Z4O8wlmdzn4fx3q7Q2oiqI77wuCZbUDeNpOVQOTXWlu9iYia/aZwZmH2u8IDOm4T300gzJmF9UhSIIrGRia0sn4NoR6vjbr1lSbUNZvqEUUpQ4m45Ixn5Z4TNrHEDMKiwEjShZO6MeRGhbFOj8LYkJI/BemKa1ku1LU4o1C96DxqjRVisWdbZg06jIZskwym/eWXiDo1BqM41AtUikGCAl31Ws7fgWfIVTFilVDgDX4mSRpC2IKbd3BOZiC4RNgmMQaQ9jfJvpR+SDqFz5WL9VmAyFqm7E7IAiramuys0Q9rwKjjd0iHsmuZ0sM6va8V6hPo8hP7KAaJC1aCnD+AzoGmaAe4rEt5UiG9RHSV59iCsNc6dhrR+aOM9sCSr94SpAXXu7vXbDUMSbDSiyy+w1kuuoyHV0wgpuaJbe+3TTbfyh9krn/yokGsTfI2QkzXbv5rfwj78cul2bk0kDKx8m5lmuXOBCNI8ztFr/5VF9TEr/+vO90QJhxNXlwhFpLjsEzIh5sHon8VKzFDN36vVELxtmWVoqK72uFtNwhBstTHunZ9QrRpEQ3sAQWXjXwkLHap6eNAp5y2qB9cnr4RCb+UM6sUMErva0f3VIf32xEIqCvQVueva6yO4DFpiQQFe70m7Z8fGIJ6vwz6q9pqwQuDTt3Rb3++CeR+qasU7KHqAGD8nOwxgThTeKiHcMgCkwTUhPgofIaY1jTowZnkEstxgcAJuPPS5BdZ6elXU5FRC+bQOdgkPc/D7r907pqpB2fWXZxZ45Qzvnmc6sPw15BOkWgCDOb6MAZ4QHlWbWC5efsypQdno/FoEKd6BGZJBIYaPmGWiL0dpuSgV9OnpqHAD9wShtKDsxHsevfIg3rqQAAClkCMeuHf5QMUlMWjnfzZW+1AIIZ8R47vbmfSQYI+ITO1BOMMEG7pRisI3F9rGEGGnYOQzilSZMjyGmAQJNMvQV1XTvv1UuV4+cspSL/PJwtOJLf4aixB1s6ebg1Ctob8/YG4ns+QKZwfl6UOjHj0mQx8jHRV94/E6qy1HPS34LE1yElpYY41yS3iMb8ND38LqSlB/hYuK000gLR3Y/vtjaFciVEGUwksbTuZIPhEnS7+3IggxHNF6444BWkN60Elmb7T+mDzE9qgnwmCT9TpunLTkBPkwNtkBbnOQKIRY5Cv0TzsiMFWbX13GAf7GCDwRN3Gc009+lPbl/UAaVbw86Ui3hFIIyn6erw9DaRmMhRagbfenia33jkZJL0sZZA0IWIsEO7sDrt3GjwX+XvXb0y8fQ+TgVXSTicg8mOtmxUMPoHrS6Wbpw1kMOlON+sjWlUfVwdbrUHYonxHrWRTSdYg2J1Xrhj8UDcO9qnN0zgMkscieM3huDqYAFAmSM7e1TYvYlFaLE5A+qGbpT19asSePdhmQBnEWdaIvZ6A1yvjLBtggpTYLPfT22iO7tikrEGqYGZpmW8dXrMfbrgyiB+oRTp8aOcHKCYIX5DhGzPzpfm8M5B6Gkg9DaSeDWIsS/ZZOa0V1HZwAZ5AFV9WXuqyB/HRQHyOQU5KhRxda2ZSh5fPsNlSbVKFqKh8VEFQu4syeFcRNKsgj7NSuVjhKnsglo0eCFuHPbu4TMWLYi7U/ZWjDYKdIZo22HzTeXFRLn1miQ+Unw/Fiv8Csl1aThve5rHerHqa1VtPD0QXtMdK/wvIYvrGjvtPz7N764m+T4ZLFCuV9b5l1EHwXeNMtbHQogteJopixX3u/6yRhdR/PlU81Y6kZBUdhOMfgjlGGwRnfB5tL90znDONPsjG6TmMDbioWlB4dYyBsL0vHURat2CMgSydwlOKkc0cQ1OkGXljC2QRZY+a9RhGbB337EljCmQ6JZIU/8v/vZqyiR9TIHnSfC5b5eeOIZBcylYqK/5Ud3c/ScVxHMc/+7Ud5JnDk2gIJAqaKZFWGClGhT2Y1XK4LuimVXbRyquen9Zzbey3fc8/xP/ABWNzqXProtX6EzqyTE6AngN4Rq9L5817Bw/nHJifGFTZ7850TgiO9bLaS60o1EiRO9I5IV2H64yWzEAVP4mRjgmpY4pfhDopOtIxIV0nM7XvIxNQqSfYMSEustf+D5hxqCbYD3RGSKT2/Bu64IVqtoOU6IiQOTKhJT0i2VkHhNhoP/7l8UCDTC/1dUAIi/vwL+dsGBoM+3p0D2EMCvV/lOYz0IYd6NczZFkenL63rOaG5AK0GSbxjG4h7Ga+4iZDNbu9zr3uovZ9UEownULu5LNWxqxZ5cCxQGKdD94GoFVOpIQ+IcKfqem7+byguPwdQY1AAJr1mxz6hCzl76HiXn5JMegYR9u4XDqELGztyt9WrJn30znU8hyPQjvmpmlhz0OC+Swqsoo1c0O9VwTG+Xk0weWmY8N7HcKy+UeQPcpnGXYTHuAzaELQRCNsj0OwJJ95Fxbkc/ASqjBDgwHYITRDSKT2/g1xIZuXZRdQze42NNhNDaBJ1kORvQ1B1/Lt28tdqMZEMqCewGgYTTITJQRUPNXtojFDcfU7JUqhqAV1MYdIx45CZvmu4wM6f+NR9KlGKZbxdAiX+XGgfsuciczRy0kvbukWYifXDmeuRiUWJ59484LfQKDBMC5bmOKPH0d1vB+5amZoJDbLj1tQo/uCFy/5V+knLz1P83TdVo+RG0XyG3QIUSM2UG8HcpSnPxWKa9LGWqHEZ0MIQyl04yK8yTHvpEgj1/QKMU9iJ55RD2oEBuTDUaosKJeLpQ8xxaure+I8505UHPXRL51CIhTHLizJ0SiUnq2uFbYGraWyUTF6Oc/57HZ97olOIYfIoeJixXjZi79uJF9JhRVpS6HIH8a25uIXPZhIjof1f/iQoV4BuwnNG/lACFuGOF9dl7aV159D5k1u7ikHar8K3T7X0NA0OaBCdMoZwtmxmTBkZy+sFgtSlUL5vPMsAtyYPB3Cv663MeQBGuqZFqCWfCSM6QkAnyWlNc75FOAJo55bbevYx9AW0bG0kQ8hOrC2UVaEbPwc2uku7MG+S+3IOHVfQANs2qSx0TITRYxzviopvcHuWEKkg36GPZCg/QyaeYdGf6xLVVbWvo5HoYLNL9JhtJ+8QphBU96vlKRtpSJX+xTMloFwzmdFWwWb3vgIPTRWnbYKUuGl8zTUEgaJjp1BGx2NO6CB8g2yLBW2X1gf0W2BaoZJOcWFduk3oGmnna/floqlyuFYL6zyxRA0YS6/DZNHXAJaJvjpCJrW7cXrIl9fWS1L8iXwMyefh3YniXpTNrQmaCKxBy2wLPKH78p8Q/rGXyE22g3thDPniHwAQ/NsborPoRXdp2c9mOcvvozxNJo2Z47gimgyD6MpArpMfgNa5AXSmze6Q2MWtCI4QkQmG7RiuXNiEO0RikXROmb1j1A/cicn56DegUGi/TZ0GGao/O1Tb5/aryQdJoofENCJhNz0IA2C+Ux2h5Xt8Gv+OPUCJ6zoYIcNQJxkdrC+lONEhG1/UBu0njH3GZDaPHAJ/AfY1RMpXw7DtKkPV91E5O5BjjZZEbE7+hn+J5nJvumTVzA8KMohVsz5jvjNLuzqN7HhwzGO9RY9AAAAAElFTkSuQmCC"
                                >
                                </v-img>
                            </v-flex>
                        </v-layout> 
                        <v-layout row wrap >
                            <v-flex xs12 md12 class="mt-3">
                                <v-card-text class="textalign">
                                    <p >Art and Desgin</p>
                                </v-card-text>
                            </v-flex> 
                        </v-layout> 
                        <v-layout row wrap>

                            <v-btn class="btnalign" tile  flat outlined color="success">
                                View
                            </v-btn>
                            <v-spacer></v-spacer>
                            <v-btn class="btnalign" tile  flat outlined color="error">
                                Delete
                            </v-btn>
                        </v-layout>
                        
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>        
    </div>
</template>

<script>
export default {
    data:()=>({
      catagories:[],
    }),
    created(){
        this.getCatagories()
    },
    methods:{
        getCatagories: function(){
            axios.get('/api/catagory').
            then(res=>{
                console.log(res.data.data)
            }).catch( err => console.log(err))
        }
    }
}
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css?family=PT+Sans&display=swap');
    .textalign{
        text-align: center;
        font-family: 'PT Sans', sans-serif;
        font-size: 16px;
        font-weight: bold 
    }
    .btnalign{
        margin-top:-10px
    }
    
</style>
