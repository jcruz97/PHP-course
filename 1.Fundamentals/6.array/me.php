<?php
$me = array('firstname' => 'Jurgen',
            'lastname' => 'Cruz',
            'age' => 23,
            'nationality' => 'belgian',
            'mothertongue' => 'spanish',
            'prefered_language' => 'french',
            'english_speaker' => true,
            'javascript_skills' => null,
            'favourite_movies' => array('Interstellar', 'Contact', 'The imitation game')
);

$me['hobbies'] = ['Crafting', 'Coding', 'Video-games', 'Beer'];

$tellin = array('firstname' => 'Théo',
            'lastname' => 'Huynen',
            'age' => 22,
            'nationality' => 'belgian',
            'mothertongue' => 'french',
            'prefered_language' => 'french',
            'english_speaker' => true,
            'javascript_skills' => null,
            'favourite_movies' => array('Interstellar', 'La grande vadrouille', 'Kaaamelot')
);

$soulmate = array('firstname' => 'Emma',
            'lastname' => 'Aterton',
            'age' => 24,
            'nationality' => 'english',
            'mothertongue' => 'english',
            'prefered_language' => 'french',
            'english_speaker' => true,
            'javascript_skills' => null,
            'favourite_movies' => array('Interstellar', 'Contact', 'The imitation game')
);

$me['tellin'] = $tellin;

$me['hobbies'][] = 'Taxidermy';
$me['lastname'] = 'Durand';

$soulmate['hobbies'] = ['Reading', 'Testing restaurants', 'Video-games', 'Beer', 'Hiking'];

$possible_hobbies_via_merge = array_merge($soulmate['hobbies'], $me['hobbies']);
$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($me);
print_r(count($me['hobbies']));
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

?>