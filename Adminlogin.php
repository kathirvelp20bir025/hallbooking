<html>
    <head>
        <Title>Admin</Title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Oswald', sans-serif;
}
body
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #060c21;
}
.form
{
    position: relative;
    background: #060c21;
    border: 1px solid #000;
    width: 350px;
    padding: 40px 40px 60px;
    border-radius: 10px;
    text-align: center;
}
.form::before
{
    content: '';
    position: absolute;
    top: -2px;
    right: -2px;
    bottom: -2px;
    left: -2px;
    background: linear-gradient(315deg,#e91e63,#5d02ff);
    z-index: -1;
    transform: skew(2deg,1deg);
    border-radius: 10px;
}
.form h2
{
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 5px;
}
.form .input
{
    margin-top: 40px;
    text-align: left;
}
.form .input .inputBox
{
    margin-top: 10px;
}
.form .input .inputBox label
{
    display: block;
    color: #fff;
    margin-bottom: 5px;
    font-size: 18px;
    letter-spacing: 1px;
}
.form .input .inputBox input
{
    position: relative;
    width: 100%;
    height: 40px;
    border: none;
    outline: none;
    padding: 5px 15px;
    background:linear-gradient(315deg,#e91e63,#5d02ff) ;
    color: #fff;
    font-size: 18px;
    border-radius: 10px;
}
.form .input .inputBox input[type="submit"]
{
    cursor: pointer;
    margin-top: 20px;
    letter-spacing: 1px;
}
.form .input .inputBox input[type="submit"]:hover
{
    background:linear-gradient(315deg,#5d02ff,#e91e63) ;
}
.form .input .inputBox input[type="submit"]:active
{
    color: rgba(255, 255, 255, 0.521);
    background:linear-gradient(315deg,#e91e6271,#5f02ff8c) ;
}
.forgot
{
    margin-top: 10px;
    color: #fff;
    font-size: 14px;
    letter-spacing: 1px;
}
.forgot a
{
    color: #ff0800;
}

        </style>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    </head>
    <body>
        <div class="form">
            <h2>Login</h2>
            <div class="input">
                <div class="inputBox">
                    <input type="text" name="username" id="username" placeholder=" " required>
                    <label for="">Username</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" id="password" placeholder=" " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
                    <label for="">Password</label>
                    <div class="requirements"> Must be a valid password!</div>
                </div>
                <div class="inputBox">
                <a href="adminpage">
                    <input type="submit" name="" value="Sign In"> </a>
                </div>
            </div>
            
        </div>
        
    </body>
</html>
