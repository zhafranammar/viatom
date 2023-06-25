<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="rectangle"> 
                <img class="in-rec" src="asseets/web/pena.png">
            </div>
          </div>
          <div class="col" id="box">
            <h2>Login to your account</h2>
            <a>Mulai petualangan atommu sekarang!</a>
            <div class="input-group flex-nowrap">
                <a href="/auth/google" class=""row justify-content-md-center">
                    <div class="p-2 bd-highlight">
                        <img
                            class="google-icon"
                            src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                        />
                    </div>
                    <p class="p-2 bd-highlight">Sign In with Google</p>
                </a>
            </div>
            <div class="line">
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                    <div class="col">
                        <p class="or">Or</p>
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
            </div>
            <h3>Email*</h3>
            <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="Enter you email" aria-label="Enter you email" aria-describedby="addon-wrapping">
            </div>
            <h3>Password*</h3>
            <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="Enter you password" aria-label="Enter you password" aria-describedby="addon-wrapping">
            </div>
            <button class="btn btn-primary input-group flex-nowrap" id="sub" type="submit">Login</button>
            <ul class="sign input-group flex-nowrap">
                <li>
                    <a>Already have an account?</a>
                    <a class="btn btn-link" href="#SignUp" role="button">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</div>
</html> 

<style>
    body{
        padding: 0;
        width: 1440px;
        height: 1024px;
    }
    .google-icon{
        width: 50px;
        height: 50px;
    }
    h3{
        position: relative;
        left: 35px;
        top: 10px;
        color: var(--5, #000);
        text-align: left;
        /* H3 */
        font-size: 15px;
        font-family: Plus Jakarta Sans;
        font-weight: 600;
        line-height: 28px;
    }
    .line{
        position: relative;
        top: 25px;
    }
    ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    .sign{
        position: absolute;
        top: 380px;
        left: 200px;

    }
    #box{
        position: relative;
        top: 150px;
    }
    #sub{
        position: absolute;
        top: 320px;
        left: 50px;
    }
    .btn-primary{
        width: 550px;
        height: 48px;
        border-radius: 8px;
        background: #343530;
    }
    h2{
        color: #000;
        /* H2 */
        font-size: 32px;
        font-family: Plus Jakarta Sans;
        font-weight: 700;
        line-height: 32px;
    }
    .input-group{
        font-size: 16px;
        font-family: Plus Jakarta Sans;
        line-height: 20px;
    }
    .or{
        color: var(--6, rgba(43, 43, 43, 0.30));
        text-align: center;
        /* Body 1 */
        font-size: 16px;
        font-family: Plus Jakarta Sans;
        opacity: 0.9;
    }
    .flex-nowrap{
        width: 550px;
        height: 48px;
        flex-shrink: 0;
        border-radius: 8px;
        border: 1px solid var(--6, rgba(43, 43, 43, 0.30));
        left: 35px;
    }
    hr{
        position: relative;
        left: 20px;
        width: 140px;
        height: 1px;
        opacity: 0.3;
    }
    .in-rec{
        position: absolute;
        width: 530px;
        height: 530px;
        flex-shrink: 0;
        top: 40px;
        left: 40px;
    }
    .logo{
        position: absolute;
        width: 114px;
        height: 43px;
        flex-shrink: 0;
        top: 30px;
        left: 104px;   
    }
    .rectangle{
        position: absolute;
        width: 600px;
        height: 600px;
        top: 105px;
        left: 104px;
        flex-shrink: 0;
        border-radius: 50px 0px;
        background: #343530;
    }
</style>