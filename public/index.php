<?php
include 'models/person.php';

$person = Person::find();

if(!$person->id){
  $new_person = new Person('Joe', 'Bloggs');
  if ($new_person->save()){
    $person = $new_person;
  }
  else{
    echo '<br />Error saving person';
  }
}

echo 'Hello ';
echo $person->displayName();
echo "<br />";
echo $person->json();

?>