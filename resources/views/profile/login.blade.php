<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Viatom</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col ps-5 text-end">
          <div class="l-sec py-4 text-center">
            <img src="assets/web/pena.png" alt="" />
          </div>
        </div>

        <div class="col">
          <div class="r-sec mt-5 ms-5">
            <h2 class="ms-4">Login to your account</h2>
            <p class="ms-4">Mulai petualangan atommu sekarang!</p>
            <form>
              <div class="mb-3 text-start w-75">
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3 text-start w-75">
                <label for="exampleInputPassword1" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                />
              </div>
              <button type="login" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
      style="
        background-image: url('map1.png');
        background-size: cover;
        overflow-y: scroll;
      "
    ></script>
  </body>
</html>
