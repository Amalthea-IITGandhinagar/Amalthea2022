
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Campus Ambassador | Amalthea '20</title>
    <link rel="icon" href="../engine/images/aml_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo:400&display=swap" rel="stylesheet">    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton|Assistant|Paytone+One&display=swap" rel="stylesheet">
    <link href="../engine/css/custom.css" rel="stylesheet">    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>    
    <script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-app.js"></script>    
    <script src="https://www.gstatic.com/firebasejs/3.6.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.6.1/firebase-database.js"></script>    
    <script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-firestore.js"></script>        
    <script src="../engine/js/simple.js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());    
      gtag('config', 'UA-148907672-1');
    </script>
    <style type="text/css">
        body {
            background:#ECF5FF;
            text-align:left;
            font-size:11pt;
            backface-visibility:hidden !important;
        }
        .fixedInner {
            position:fixed;
            
            z-index:5;
            margin-top:100vh;
            margin-left:100vw;
            display:none;
            transform:translate(-100%,-100%);
            padding-right:15px;
            padding-bottom:15px;
            backface-visibility:hidden !important;
        }
        .fixedInner2 {
            background:rgba(0,0,0,0.6);
            padding:10px;
            font-size:9pt;
            border-radius:10px;
            color:#fff;
        }
        .fixedInner2 span {
            font-size:11pt;
        }
        .fixedInner2 a {
            color:#fff !important;
            text-decoration:none;            
        }
        .pageOneInnerContainerForm {
            background:#fff;
            padding:15px;
            box-shadow: 0px -5px 10px rgba(0,100,255,0.1);
        }
        .pageOneContainerForm {
            position:relative;
            z-index:2;
            transform:rotate(0deg);
        }
        .registrationText {
            font-size:11pt;

        }
        .form-control {
            font-size:11pt;
            border-radius:0;
        }
        .input-group-text {
            font-size:11pt;
            border-radius:0;
        }
        .pageOneDesignForm .Layer0 {
            position: absolute;    
            z-index: 1;    
            width: 100vh;    
            height: 100vh;            
            margin-top:-120vh;    
            box-shadow: 50px 50px 0px #14306C,100px 100px 0px #0D1F46;
            margin-left:80vw;
            background: #1C4193;
            border-radius: 10px;    
            transform: rotate(45deg);    
        }
        .pageOneDesignForm .Layer1 {
            position: absolute;    
            z-index: 0;    
            width: 200vw;    
            height: 130vh;            
            margin-top:-110vh;        
            margin-left:-50vw;        
            border-top-left-radius:100%150%;
            border-top-right-radius:100%150%;   
            background: #2557C4;
                      
            transform: rotate(0deg);    
        }
        @media only screen and (max-width:800px) {
            .pageOneDesignForm {
                display:none;
            }
            
                .fixedInner {
                    position:fixed;                    
                    z-index:5;
                    margin-top:100vh;                    
                    display:none;                    
                    backface-visibility:hidden !important;
                    padding:0 !important;
                }
                .fixedInner2 {
                    background:rgba(0,0,0,0.6);
                    padding:10px;
                    font-size:9pt;
                    width:100vw;
                    border-radius:0px;
                    color:#fff;
                }
                .fixedInner2 span {
                    font-size:11pt;
                }
        }
        #btnsbt {
            background:#2557C4;
            border-radius:100px;
            border:none;
            
            padding:7px 35px;
        }
        .catext {
            
            font-size:15pt;
            color:#454B69;
        }
        .kmore {
            text-decoration:none !important;
            color:#454b69 !important;
        }
        .loading {
            height:100vh;
        }

        #snackbar {
        visibility: hidden;        
        background-color: rgba(0,0,0,0.7);
        color: #fff;        
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        border-radius:10px;
        z-index: 9;
        margin-left: 50%;
        bottom: 30px;
        transform:translate(-50%,0);
        font-size: 17px;
        }

        #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
        }
    </style>
</head>
<body>    
    <div class="fixedContent">        
    </div>    
    
    <br>
    <div class="pageOne">
        <div class="pageOneContainerForm">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <div class="brandAml" data-aos="fade-right" data-aos-duration="500">
                            <div class="img">
                                <img src="../engine/images/aml_logo_brand_inv.png" >
                            </div>                            
                        </div>         
                        <br>
                        <div  data-aos="fade-right" data-aos-duration="500" data-aos-delay="200">
                            <a href="../" class="kmore">&laquo; Know More</a>  
                        </div>                                                             
                        <br>
                        <div class="pageOneInnerContainerForm"  data-aos="fade-right" data-aos-duration="500"  data-aos-delay="400">                                                        
                        <div class="catext"> CAMPUS AMBASSADOR PROGRAM </div> <hr> <div class="registrationText" style="height:100vh !important;"> Waiting for authentication... </div> <br> 
                        </div>                        
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </div>
        <div class="pageOneDesignForm">
            <div class="Layer0"></div>
            <div class="Layer1"></div>
        </div>
    </div>
    <br>
    <div id="snackbar"></div>
    <script>
        AOS.init({
            once:true
        });

        
        window.onscroll = function () {
            window.scrollLeft = 0;
            window.scrollRight = 0;
        }
        
        var scrollEventHandler = function()
        {
        window.scroll(0, window.pageYOffset)
        }
        window.addEventListener("scroll", scrollEventHandler, false);       
    </script>
</body>
</html>