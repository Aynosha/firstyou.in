
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstYou Company - Get Expert Professional services at Home</title>
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Style/img/favicon.ico">
</head>
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
<body>
  
        <nav class="navbar">
            <img src="./style/img/favicon.ico" alt="Logo" class="Logo">
            <div class="Logo-content"><p>FirstYou <br>Company</p></div>
            <div class="navbar-a">
            <a href="#">Blog</a>
            <a href="./Login&SignUp.php">Login/Sign + 50Rs Offer</a>
            </div>
        </nav>
        <div id="bg">
            <div class="bg-content">
            <h1>Onsite Services, on demand.</h1>
            <div class="location">
            <img src="./Style/img/Location.png" alt="Location Image" id="location-img">
            <select name="location" id="location">
            <option value="Blank">&nbsp;&nbsp;&nbsp;&nbsp; Blank</option>
            <option value="Adhara Pradesh">&nbsp;&nbsp;&nbsp;&nbsp; Adhara Pradesh</option>
            <option value="Arunachal Pradesh">&nbsp;&nbsp;&nbsp;&nbsp; Arunachal Pradesh</option>
            <option value="Assam">&nbsp;&nbsp;&nbsp;&nbsp; Assam</option>
            <option value="Bihar">&nbsp;&nbsp;&nbsp;&nbsp; Bihar</option>
            <option value="Chhattisgahr">&nbsp;&nbsp;&nbsp;&nbsp; Chhattisgahr</option>
            <option value="Goa">&nbsp;&nbsp;&nbsp;&nbsp; Goa</option>
            <option value="Gujarat">&nbsp;&nbsp;&nbsp;&nbsp; Gujarat</option>
            <option value="Haryana">&nbsp;&nbsp;&nbsp;&nbsp; Haryana</option>
            <option value="Himachal Prdesh">&nbsp;&nbsp;&nbsp;&nbsp; Himachal Prdesh</option>
            <option value="Jharkand">&nbsp;&nbsp;&nbsp;&nbsp; Jharkand</option>
            <option value="Karnataka">&nbsp;&nbsp;&nbsp;&nbsp; Karnataka</option>
            <option value="Kelera">&nbsp;&nbsp;&nbsp;&nbsp; Kelera</option>
            <option value="Madhya Pradesh">&nbsp;&nbsp;&nbsp;&nbsp; Madhya Pradesh</option>
            <option value="Mharashtra">&nbsp;&nbsp;&nbsp;&nbsp; Mharashtra</option>
            <option value="Manipur">&nbsp;&nbsp;&nbsp;&nbsp; Manipur</option>
            <option value="Meghalaya">&nbsp;&nbsp;&nbsp;&nbsp; Meghalaya</option>
            <option value="Mizoram">&nbsp;&nbsp;&nbsp;&nbsp; Mizoram</option>
            <option value="Nagaland">&nbsp;&nbsp;&nbsp;&nbsp; Nagaland</option>
            <option value="Odisha">&nbsp;&nbsp;&nbsp;&nbsp; Odisha</option>
            <option value="Punjab">&nbsp;&nbsp;&nbsp;&nbsp; Punjab</option>
            <option value="Rajasthan">&nbsp;&nbsp;&nbsp;&nbsp; Rajasthan</option>
            <option value="Sikkim">&nbsp;&nbsp;&nbsp;&nbsp; Sikkim</option>
            <option value="Tamil Nadu">&nbsp;&nbsp;&nbsp;&nbsp; Tamil Nadu</option>
            <option value="Telangana">&nbsp;&nbsp;&nbsp;&nbsp; Telangana</option>
            <option value="Tripura">&nbsp;&nbsp;&nbsp;&nbsp; Tripura</option>
            <option value="Uttarakhand">&nbsp;&nbsp;&nbsp;&nbsp; Uttarakhand</option>
            <option value="Uttar Pradesh">&nbsp;&nbsp;&nbsp;&nbsp; Uttar Pradesh</option>
            <option value="West Bengal">&nbsp;&nbsp;&nbsp;&nbsp; West Bengal</option>               
            </select>
            <div id="bg-form-one">
            <img src="./Style/img/search.png" alt="Search Logo" id="search-img">
            <input type="text" placeholder="Search for serices" id="search">
            </div>
            </div>
            </div>
        </div>
        <section id="service">
            <h4>Our Services</h1>
            <div id="service-item">
            <div class="service-item-item">
            <img src="./Style/img/service-img/computer-install.png" alt="Computer Installation image"><br>
            <p>Computer Installation</p>
             </div> 
            <div class="service-item-item">
            <img src="./Style/img/service-img/computer-repair.png" alt="Computer Repair image"><br>
            <p>Computer Repair</p>
            </div>
            <div class="service-item-item">
            <img src="./Style/img/service-img/laptop-repair-screen.png" alt="Laptop Screen Replacement image"><br>
            <p>Laptop Screen Replacement</p>
            </div>
            <div class="service-item-item">
            <img src="./Style/img/service-img/laptop-virus.png" alt="Laptop Virus image"><br>
            <p>Laptop Virus</p>
            </div> 
            <div id="service-item-2">
            <div class="service-item-item">
            <img src="./Style/img/service-img/Motherboard-repairing.png" alt="Motherboard Repairing image"><br>
            <p>Motherboard Repairing</p>
            </div>
            </div>
            <div id="service-item-3">
            <div class="service-item-item">
            <img src="./Style/img/service-img/OS-Install.png" alt="OS Installation image"><br>
            <p>OS Installation</p>
            </div>
            </div>
            <div id="service-item-4">
            <div class="service-item-item">
            <img src="./Style/img/service-img/Laptop-Repair.png" alt="Laptop Repair image"><br>
            <p>Laptop Repair</p>
            </div>
            </div>
            <div id="service-item-5">
            <div class="service-item-item">
            <img src="./Style/img/service-img/Hard-disk-&-Data-Recovery.png" alt="Hard Disk & Data Recovery image"><br>
            <p>Hard Disk & Data Recovery</p>
            </div>
</div>
            <div id="service-item-6">
            <div class="service-item-item">
            <img src="./Style/img/service-img/cctv.jpg" alt="Camera img">
            <p>CCTV Installlation Service</p>
            </div>
            </div>
        </section>
       <script src="./Script/script.js"></script>
</body>
</html>
