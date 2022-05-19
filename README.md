<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstYou Service</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap');
body{
    padding: 0;
    margin: 0;
}

/*Navbar*/

.navbar{
    font-family: 'Roboto', sans-serif;
    display: flex;
    flex-direction: row;
    width: 100%;
    position: fixed;
    z-index: 10;
    background-color: black;
}

#bg{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 550px;
    background: url('./img/bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    width: 100%;
}

.Logo{
    width: 40px;
    height: 40px;
    padding: 10px 10px 0 30px;
}

.Logo-content{
    font-weight: bold;
    color: white;
}

.Logo-content p{
    margin-top: 7px;
    position: relative;
    color: white;
}
.navbar-a{
    text-align: center;
    padding-left: 40%;
    align-items: center;
    justify-content: center;
    display: flex;
}
.navbar-a a{
    color: white;
    font-weight: bold;
    text-decoration: none;
    width: 271px;
}

.navbar-a a:nth-child(1){
    width: 125px;
}

.navbar-a a:nth-child(2) {
    text-decoration: underline;
    font-weight: bold;
}

/*Background*/


.bg-content{
    color: white;
    position: relative;
    bottom: 0px;
    font-family: 'Roboto', sans-serif;
}

.bg-content h1{
    color: white;
    font-size: 50px;    
    margin: 0;
    margin-left: 30px;
}

/*Location*/

.location{
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 12px 0 12px 12px;
    border-radius: 5px;
    display: inline-block;
}

.location select{
    padding: 12px 0 12px 12px;
    border-radius: 5px; 
}

#location-img{
    height: 30px;
    width: 30px;
    z-index: 2;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    left: 38px;
    top: 8px;
}

/*Search*/

#search-img{
    height: 30px;
    width: 30px;
    left: 45px;
    top: 9px;
    position: relative;
    z-index: 1;
}

.bg-content #bg-form-one{
    text-align: center;
    display: inline-block;
}

.bg-content #bg-form-one input{
    padding: 12px 0 12px 12px;
    border-radius: 5px;
    width: 400px;
    padding-left: 50px;
}

/*Service Section*/

section #service{
    height: 300px;
}

#service h4{
    text-align: center;
    position: relative;
    font-size: 2.5rem;
}

#service-item{
    display: flex;
    flex-direction: row;
    text-align: center;
    margin-left: 250px;
    position: relative;
}

#service-item img{
    height: 150px;
    width: 150px;
}

.service-item-item{
    padding: 0 50px 0 0;
}

#service-item-2{
    position: relative;
    top: 250px;
    right: 800px;
}

#service-item-3{
    position: relative;
    top: 250px;
    right: 800px;
}

#service-item-4{
    position: relative;
    top: 250px;
    right: 800px;
}

#service-item-5{
    position: relative;
    top: 250px;
    right: 800px;
}

#service-item-6{
    position: relative;
    top: 450px;
    right: 1600px;
}

.service-a a{
    color: black;
    text-decoration: none;
    margin-left: 1050px;
    position: relative;
    bottom: 755px;
}

#service p{
    font-size: 20px;
    animation: service-p 3s 3s infinite backwards;
    cursor: pointer;
}

#service p:hover{
    color: red;
}

@keyframes service-p{
    1%{
        color: black;
    }

    25%{
        color: grey;
    }

    50%{
        color: green;
    }

    75%{
        color: pink;
    }

    100%{
        color: yellow;
    }
}
</style>
</head>
<body>
    <nav class="navbar">
        <img src="./Style/img/favicon.ico" alt="Logo" class="Logo">
        <div class="Logo-content"><div>FirstYou</div> <br><p>Company</p></div>
        <div class="navbar-a">
        <a href="#">Blog</a>
        <a href="#">Login/Sign Up</a>
        </div>
    </nav>
    <div id="service">
        <div class="service-item-one">
            <img src="./Style/img/service-img/cctv.jpg" alt="Camera img">
            <p>CCTV Installlation Service</p>
        </div>
    </div>
</body>
</html>
