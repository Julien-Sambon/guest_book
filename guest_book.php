<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Formulaire classique -->
            <form method="POST" action="controlbook.php" id="contact_form">
                <div class="text-center">
                    <h6>Your name :</h6>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="form-group">
                            <input class="form-control w-100" type="text" id="name" name="name" required>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h6>Your message :</h6>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="form-group">
                            <textarea class="form-control w-100" id="message" name="message" rows="7" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" title="Send your message." value="Send It !" class="btn btn-sm btn-info">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Demande pour afficher le contenu de readbook -->
<?php require("readbook.php"); ?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>