<!DOCTYPE html>
<html>

<head>
          <meta charset="utf-8">
         <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="css/main.css">

          <title>My first QCM</title>
</head>

<body>
            <header>
                <h1>header content AREAQUIZZ</h1>
            </header>

<div class="container">
    <div class="row">
        <div class="center-block">
        <div class="col-md-12">
                <form class="form-inline" action="reponses.php" method="post">
                    <div class="form-group">
                        <label for="labelemail">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email</label>
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="youremail@demo.com">
                    </div>

          <ol>
            <li>
            <h3>Quelle est la distribution linux la plus connue ? </h3>
            <div class="button_inline">
                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                <label for="question-1-answers-A">A) Arch Linux </label>
            </div>

              <div class="button_inline">
                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                <label for="question-1-answers-B">B) Ubuntu</label>
              </div>

              <div class="button_inline">
                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                <label for="question-1-answers-C">C) Kali linux</label>
              </div>


            </li>

            <li>
              <h3>Comment s'appelle la dernière version de Arch Linux au niveau de la sécurité</h3>

              <div class="button_inline">
                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                <label for="question-2-answers-A">A) Arch Linux</label>
            </div>
                <div class="button_inline">
                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                <label for="question-2-answers-B">B) Linux Antergos</label>
              </div>

              <div class="button_inline">
                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                <label for="question-2-answers-C">C) Black Arch Linux</label>
              </div>

            </li>
            <li>
              <h3>Qu'est ce que le bitcoin ? </h3>

                  <div class="button_inline">
                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                    <label for="question-3-answers-A">A) Une monnaie cryptée</label>
                  </div>

                  <div class="button_inline">
                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                    <label for="question-3-answers-B">B) Une nouvelle devise</label>
                  </div>

                  <div class="button_inline">
                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                    <label for="question-3-answers-C">C) Un nouveau software</label>
                  </div>
                  <li>
                    <h3>Que veut dire ETH ? </h3>

                    <div class="button_inline">
                      <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                      <label for="question-4-answers-A">A) Ether</label>
                    </div>

                    <div class="button_inline">
                      <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                      <label for="question-4-answers-B">B) Ethereum</label>
                    </div>

                    <div class="button_inline">
                      <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                      <label for="question-4-answers-C">C) EMS</label>
                    </div>
                  </li>
                  <li>
                    <h3>Qu'est-ce que Tor? </h3>

                    <div class="button_inline">
                      <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                      <label for="question-5-answers-A">A) Navigateur anonyme</label>
                    </div>

                    <div class="button_inline">
                      <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                      <label for="question-5-answers-B">B) un Nounours</label>
                    </div>

                    <div class="button_inline">
                      <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                      <label for="question-5-answers-C">C) Un nouveau hardware</label>
                    </div>
                  </li>

                </li>

              </ol>

                <button type="submit" name="envoyer" class="btn btn-default">Envoyer</button>
                </form>
        </div>

    </div>
  </div>

</div>
<footer>
    <p>This the footer content AREA of this page</p>
</footer>
</body>

</html>
