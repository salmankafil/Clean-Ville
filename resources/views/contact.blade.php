<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Clean Ville</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
       body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url({{ asset('images/signupbg.png') }});
        
    }
    header {
    background-color: #007BFF;
    color: #fff;
    text-align: center;
    display: flex;
}
    .container {
        display: flex;
        justify-content: space-around;
        width: 100%;
        max-width: 900px;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2);
    }

    .contactInfo {
        padding: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contactInfo h2 {
        color: #095a55;
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .contactInfo ul {
        list-style: none;
        padding: 0;
    }

    .contactInfo li {
        display: flex;
        align-items: center;
        margin: 15px 0;
        color: #095a55;
    }
    .vertical {
      border-left: 4px solid rgb(0, 0, 0);
      height: 255px;
      bottom: 150px;
      position:absolute;
      left: 33%;
    }
    .contactForm {
        padding: 30px;
    }

    .contactForm h2 {
        color: #095a55;
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .contactForm .formBox {
        display: flex;
        flex-wrap: wrap;
        margin: -10px;
    }

    .inputBox {
        width: calc(50% - 20px);
        margin: 10px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        border: none;
        outline: none;
        border-bottom: 1px solid #777;
    }

    input[type="submit"] {
        cursor: pointer;
        background: #095a55;
        border-radius: 20px;
        color: #fff;
        border: none;
        padding: 12px 20px;
    
    }

    input[type="submit"]:hover {
        background: #0d9480;
    }
    .container .contactInfo ul li i {
    font-size: 20px;
    margin-right: 10px;
    color: #095a55; 
}

.icon-container{
        position: absolute;
        top: 20px;
        left: 20px;
        display: flex;
        
    }
    .home-link {
      
       
        text-decoration: none;
        color: #000000;
        font-size: 30px;
        padding: 10px 20px 10px 0;
        
    }
    
</style>
<body>
    <header>
    <div class="icon-container">
        <a href="homepage.html" class="home-link">
            <i class="fas fa-home"></i>
        </a>
    </header>
    </div>
    <div class="container">
        <div class="contactInfo">
            <h2>Contact Info</h2>
            <ul>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>184 Iqbal Street<br>Saddar <br>Karachi</span>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="cleanville@gmail.com">cleanville@gmail.com</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <span>702-279-3488</span>
                </li>
            </ul>
        </div>
        <div class = "vertical"></div>
        <div class="contactForm">
            <h2>Send a Message</h2>
            <div class="formBox">
                <div class="inputBox">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" required>
                </div>
                <div class="inputBox">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" required>
                </div>
                <div class="inputBox">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" required>
                </div>
                <div class="inputBox">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" id="mobile" required>
                </div>
                <div class="inputBox w100">
                    <label for="message">Write your message here</label>
                    <textarea id="message" required></textarea>
                </div>
                <div class="inputBox w100">
                    <input type="submit" value="Send">
                </div>
            </div>
        </div>
    </div>
</body>
</html>