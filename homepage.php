<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Aap Ke PM</title>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <link rel="icon" href="flag.svg">
    <style>
        .chart--container {
            min-height: 530px;
            width: 100%;
            height: 100%;
            background-color: #333;
        }

        #myChart {
            background-color: #333;
        }

        .zc-ref {
            display: none;
            background-color: #333;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #333;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: greenyellow;
            height: 75px;
        }

        li {
            float: right;
            font-weight: 300px;
        }

        li a,
        .dropbtn {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgb(116, 187, 9);
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #c2bcbc;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .arrow {
            border: solid black;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
        }

        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }

        #home {
            height: 74px;
        }

        #home a:hover {
            height: 74px;
        }

        .box {
            margin: 30px;
            width: 40%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
        }

        .button {
            font-size: 1em;
            padding: 10px;
            color: #fff;
            border: 2px solid greenyellow;
            border-radius: 20px/50px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-out;
        }

        .button:hover {
            background: rgb(116, 187, 9);
        }

        .logo {
            width: auto;
            height: 76px;
        }

        .lg {
            float: left;
        }

        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
        }

        .overlay:target {
            visibility: visible;
            opacity: 1;
        }

        .pop {
            position: sticky;
            float: left;
            width: 300px;
            margin-top: 20px;
        }

        .popup {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }

        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }

        .popup .close:hover {
            color: rgb(116, 187, 9);
        }

        .popup .content {
            max-height: 50%;
        }

        @media screen and (max-width: 700px) {
            .box {
                width: 70%;
            }

            .popup {
                width: 70%;
            }
        }

        .pgtitle {
            text-align: center;
            word-spacing: 5px;
            letter-spacing: 3px;
            color: white;
            font-size: 30px;
            padding-top: 35px;
        }
    </style>


</head>

<body>
    <nav>
        <ul>
            <a href="homepage.php">
                <div class=lg></div> <img class=logo src=logo2.png> </div>
            </a>


            <li class="dropdown">
                <a href="index.html" class="dropbtn">Timeline<br><i class="arrow down"></i></a>
                <div class="dropdown-content">
                    <a href="index.html#1947">1947</a>
                    <a href="index.html#19472">1947-48</a>
                    <a href="index.html#1948">1948</a>
                    <a href="index.html#1962">1962</a>
                    <a href="index.html#1965">1965</a>
                    <a href='index.html#1975'>1975-77</a>
                    <a href='index.html#1984'>1984</a>
                    <a href="index.html#1991">1991</a>
                    <a href='index.html#1999'>1999</a>
                </div>
            <li><a href="funfacts.html">Fun<br>Facts</a></li>
            <li><a href="graphs.html">Economic<br>State</a></li>
            <li><a href="cabinet.html">Cabinet<br>Ministers</a></li>
            <li><a href="pmpage.html">Prime<br>Ministers</a></li>
            <li id="home">
                <a href="homepage.php"><br>Home</a>
            </li>

            </li>

        </ul>
    </nav>

    <div class=pop>
        <div class="box">
            <a class="button" href="#popup1">On This Day? </a>
        </div>

        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content" style='padding:10px; font-size:17px'>
                    <b>
                        <?php
                        DEFINE('DB_USERNAME', 'root');
                        DEFINE('DB_PASSWORD', 'root');
                        DEFINE('DB_HOST', 'localhost');
                        DEFINE('DB_DATABASE', 'onthisday');
                        $d = date("Y-m-d");
                        $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                        $sql = "SELECT Info from onthisday where Day ='".$d."'";
                        $result = $mysqli->query($sql);
                        $row = $result->fetch_array(MYSQLI_NUM);
                        ?>
                        <script>
                            var curday = function(sp) {
                                today = new Date();
                                var dd = today.getDate();
                                var mm = today.getMonth() + 1; //As January is 0.
                                var yyyy = today.getFullYear();

                                if (dd < 10) dd = '0' + dd;
                                if (mm < 10) mm = '0' + mm;
                                return (dd + sp + mm + sp + yyyy);
                            };
                            document.write(curday('/'));
                            var len = "<?php echo $row[0] ?>";
                            document.write('<br>', len);
                        </script>

                    </b>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br> <br> <br>
    <div class=pgtitle> Map of India with The Constituencies of <br>The Prime Ministers</div>
    <br>
    <div id="myChart" class="chart--container">
    </div>
    <script>
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
        let chartConfig = {
            backgroundColor: '#333',
            shapes: [{
                type: 'zingchart.maps',
                options: {
                    name: 'ind',
                    panning: false, // turn of zooming. Doesn't work with bounding box
                    zooming: false,
                    scrolling: false,
                    style: {
                        tooltip: {
                            borderColor: '#000',
                            borderWidth: '2px',
                            fontSize: '18px',
                            whitespace: 'wrap',
                            textoverflow: 'clip',
                        },
                        borderColor: '#000',
                        borderWidth: '2px',
                        backgroundColor: '#333',
                        controls: {
                            visible: false, // turn of zooming. Doesn't work with bounding box
                        },
                        hoverState: {
                            alpha: .28
                        },
                        items: {
                            UP: {
                                tooltip: {
                                    text: 'Uttar Pradesh: <br>Jawaharlal Nehru, Lal Bahadur Shastri, Indira Gandhi, <br>Chawdhari Charan Singh, Rajiv Gandhi, V. P. Singh, Chandra Shekhar Singh, <br> Atal Bihari Vajpayee, Narendra Modi ',
                                    backgroundColor: '#ffffff'

                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            RJ: {
                                tooltip: {
                                    text: 'Rajasthan',
                                    backgroundColor: '#ffffff',
                                    height: 'auto',
                                    width: '100px'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            JK: {
                                tooltip: {
                                    text: 'Jammu and Kashmir',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            PB: {
                                tooltip: {
                                    text: 'Punjab: I K Gujral',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            DL: {
                                tooltip: {
                                    text: 'Delhi: Atal Bihari Vajpayee',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            CH: {
                                tooltip: {
                                    text: 'Chandigarh',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            HR: {
                                tooltip: {
                                    text: 'Haryana',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            UT: {
                                tooltip: {
                                    text: 'Uttrakhand',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            HP: {
                                tooltip: {
                                    text: 'Himachal Pradesh',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            BR: {
                                tooltip: {
                                    text: 'Bihar: I K Gujral',
                                    backgroundColor: '#ffffff',
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            JH: {
                                tooltip: {
                                    text: 'Jharkhand',
                                    backgroundColor: '#ffffff',
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            SK: {
                                tooltip: {
                                    text: 'Sikkim',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            AS: {
                                tooltip: {
                                    text: 'Assam: Dr. Manmohan Singh',
                                    backgroundColor: '#ffffff',
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            NL: {
                                tooltip: {
                                    text: 'Nagaland',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            AR: {
                                tooltip: {
                                    text: 'Arunachal Pradesh',
                                    backgroundColor: '#ff9933',
                                },
                                backgroundColor: '#ff9933',
                                label: {
                                    visible: true
                                }
                            },
                            MP: {
                                tooltip: {
                                    text: 'Madhya Pradesh: Atal Bihari Vajpayee',
                                    backgroundColor: '#000080',
                                    fontColor: 'white'
                                },
                                backgroundColor: '#000080',
                                label: {
                                    visible: true
                                }
                            },
                            ML: {
                                tooltip: {
                                    text: 'Meghalaya',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            MZ: {
                                tooltip: {
                                    text: 'Mizoram',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            MN: {
                                tooltip: {
                                    text: 'Manipur',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            TR: {
                                tooltip: {
                                    text: 'Tripura',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            GJ: {
                                tooltip: {
                                    text: 'Gujrat: Gulzarilal Nanda, Morarji Desai',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            DD: {
                                tooltip: {
                                    text: 'Dadara and Nagar Haveli and Daman and Diu',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            CT: {
                                tooltip: {
                                    text: 'Chhattisgarh',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            OR: {
                                tooltip: {
                                    text: 'Orissa: P V Narsimha Rao',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            WB: {
                                tooltip: {
                                    text: 'West Bengal',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            GA: {
                                tooltip: {
                                    text: 'Goa',
                                    fontColor: 'black',
                                    backgroundColor: '#138808'
                                },
                                backgroundColor: '#138808',
                                label: {
                                    visible: true
                                }
                            },
                            AP: {
                                tooltip: {
                                    text: 'Andhra Pradesh: P V Narsimha Rao',
                                    fontColor: 'black',
                                    backgroundColor: '#138808'
                                },
                                backgroundColor: '#138808',
                                label: {
                                    visible: true
                                }
                            },
                            KL: {
                                tooltip: {
                                    text: 'Kerala',
                                    fontColor: 'black',
                                    backgroundColor: '#138808'
                                },
                                backgroundColor: '#138808',
                                label: {
                                    visible: true
                                }
                            },
                            AN: {
                                tooltip: {
                                    text: 'Andaman and Nicobar Islands',
                                    fontColor: 'black',
                                    backgroundColor: '#138808'
                                },
                                backgroundColor: '#138808',
                                label: {
                                    visible: true
                                }
                            },
                            PY: {
                                tooltip: {
                                    text: 'Puducherry',
                                    backgroundColor: '#138808'
                                },
                                backgroundColor: '#138808',
                                label: {
                                    visible: true
                                }
                            },
                            KA: {
                                tooltip: {
                                    text: 'Karnataka: Indiara Gandhi, H D Deve Gauda',
                                    backgroundColor: '#138808',
                                    fontColor: 'black',
                                },
                                backgroundColor: '#138808',
                                label: {
                                    visible: true
                                }
                            },
                            MH: {
                                tooltip: {
                                    text: 'Maharashtra: P V Narsimha Rao',
                                    backgroundColor: '#ffffff'
                                },
                                backgroundColor: '#ffffff',
                                label: {
                                    visible: true
                                }
                            },
                            TL: {
                                tooltip: {
                                    text: 'Telangana: P V Narsimha Rao',
                                    fontColor: 'black',
                                    backgroundColor: '#138808'
                                },
                                backgroundColor: '#138808',
                                label: {
                                    visible: true
                                }
                            },
                            TN: {
                                tooltip: {
                                    text: 'Tamil Nadu',
                                    fontColor: 'black',
                                    backgroundColor: '#138808'
                                },
                                backgroundColor: '#138808',
                                label: {
                                    visible: true
                                }
                            },
                        },
                        label: { // text displaying. Like valueBox
                            fontSize: '15px',
                            visible: false
                        }
                    },
                    zooming: false // turn of zooming. Doesn't work with bounding box
                }
            }]
        }

        zingchart.loadModules('maps,maps-ind');
        zingchart.render({
            id: 'myChart',
            data: chartConfig,
            height: '1000px',
            width: 'auto',
        });
    </script>
</body>

</html>