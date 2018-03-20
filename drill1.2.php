

<!-- CLASS -->
<!-- DRILL1.1 -->
<?php 

    class Form {


        public function openForm($action) {
            echo '<form action="' . $action . '" method="POST">';
        }

        public function inputText($name) {
            echo '<label>' . $name . '</label>' ;
            echo '<p><input type="text" name="' . $name . '"></p>';
        }

        public function select($pays) {
            echo '<select name="' . $pays . '">';
            echo '<option>Belgique</option>';
            echo '<option>France</option>';
            echo '</select><br>';
        }

        public function inputRadio($sexe){
            echo '<p><input type="radio" value="homme" name"' . $sexe . '">Homme</p>';
            echo '<p><input type="radio" value="femme" name"' . $sexe . '">Femme</p>';
        }

        public function inputCheck($sujet) {
            echo '<p><input type="checkbox" name="' . $sujet . '">Sujet 1</p>' ;
            echo '<p><input type="checkbox" name="' . $sujet . '">Sujet 2</p>' ;
        }

        public function textArea($message) {
            echo '<textarea name="' . $message . '"></textarea>';
        }

        public function submit() {
            echo '<p><button type="submit">Envoyer</button></p>';
        }

        public function closeForm() {
            echo '</form>';
            
        }
            
    }
?>
<!-- DRILL1.2 -->
<?php
    class Html {
        
        public function css($style) {
            echo '<head>';
            echo '<link rel="stylesheet" href="' .$style. '">';
            echo '</head>';
        }

        public function img($image) {
            echo '<img src="'.$image.'">' ;
        }

        public function lien($lien) {
            echo '<a href="'.$lien.'">Google</a>';
        }
    }
?>

<!-- OBJET -->
<!-- DRILL1.2 -->
<?php
    $html = new Html();

    echo $html->css('style.css');
    // echo $meta->meta();
    echo $html->img('pic.jpg');
    echo $html->lien('http://www.google.com')
?>



    


<!-- DRILL1.1 -->
<?php 

    $form = new Form();

    echo $form->openForm('drill1.3.php'); 
    echo $form->inputText('nom'); 
    echo $form->inputText('prenom'); 
    echo $form->inputRadio('sexe');
    echo $form->select('pays');
    echo $form->inputCheck('interet');
    echo $form->textArea('message');
    echo $form->submit('submit'); 
    echo $form->closeForm(); 
?>

<!-- DRILL1.3 -->
<?php 

    class Validation {

        public function val();

        if (isset($_POST['submit'])) {
            echo "ok";
        }

    }


?>


<?php 

    $validation = new Validation();

?>

