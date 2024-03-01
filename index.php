<?php

/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */

$partite = [
  [
    'casa' => 'Olimpia Milano',
    'ospite' => 'Cantu',
    'puntiCasa' => rand(1, 60),
    'puntiOspite' => rand(1, 60)
  ],
  [
    'casa' => 'NomeCasa',
    'ospite' => 'NomeOspite',
    'puntiCasa' => rand(1, 60),
    'puntiOspite' => rand(1, 60)
  ]
];

foreach ($partite as $partita) {
  echo $partita['casa'] . ' - ' . $partita['ospite'] . ' | ' . $partita['puntiCasa'] . '-' . $partita['puntiOspite'] . '<br>';
}

/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$numbers = [];

for($i=0; $i < 15 ; $i++) { 
  $newNumer = rand(1, 100);
  if (in_array($newNumer, $numbers) === false) {
    array_push($numbers, $newNumer);
  };
};

var_dump($numbers);

/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis rutrum hendrerit. Morbi vitae tellus nisi. Nunc facilisis urna nec diam facilisis, vel feugiat nulla tempor. Morbi id nibh eros. Etiam mi nisi, efficitur a libero non, faucibus efficitur lorem. Vestibulum mauris libero, auctor dictum convallis vel, rutrum quis libero. In tristique eleifend mauris, nec lobortis lorem commodo ut. Ut tortor magna, congue et semper et, consequat eu neque. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec pellentesque malesuada tincidunt. Suspendisse finibus, eros nec dignissim dictum, lorem leo congue ante, at auctor nibh arcu id sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce consequat, magna ac dictum elementum, massa massa porta eros, vel faucibus mi metus in mauris. Cras vitae iaculis erat, vel accumsan eros. Donec id orci non ex scelerisque ultrices. Phasellus ornare quam et lorem feugiat, vel lobortis magna vestibulum. Ut lacinia massa sit amet massa aliquam finibus sit amet at justo. Morbi vel condimentum sapien. Integer ut est sollicitudin, sagittis quam quis, maximus ante. Cras vel nulla vestibulum justo blandit fermentum sed vitae lorem. Suspendisse convallis semper imperdiet. Quisque aliquam dapibus lectus vitae maximus. Nulla pulvinar tortor et ligula eleifend, et tincidunt massa ultrices. Suspendisse ex nulla, maximus at dolor vel, tempor aliquet velit. Etiam non diam vitae erat semper sollicitudin. Cras leo nunc, porttitor vel molestie at, suscipit sed massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vulputate nisl sed pulvinar congue. Curabitur pharetra mattis facilisis. Nulla condimentum risus et consectetur scelerisque. Sed pretium, velit at imperdiet commodo, nunc urna mattis metus, vitae pretium nunc velit id lorem.';
$paragraph = explode(".", $text);

var_dump($paragraph);

/* Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

$members = [
  'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
  ]
];

foreach($members as $key => $member) {
  if($key === 'teachers') {
    echo '<div style="background:lightgray; padding: 2rem; margin: 2rem 0 0 0;">';
    echo '<strong>Professori</strong>';
    foreach($members['teachers'] as $teacher) {
      echo '<div>' . $teacher['name'] . ' ' . $teacher['lastname'] . '</div>';
    };
    echo '</div>';
  } else {
    echo '<div style="background:lightgreen; padding: 2rem; margin: 0 0 2rem 0">';
    echo '<strong>Pm</strong>';
    foreach($members['pm'] as $pm) {
      echo '<div>' . $pm['name'] . ' ' . $pm['lastname'] . '</div>';
    };
    echo '</div>';
  }
}

/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

$classe = [
  [
    'nome' => 'Marco',
    'cognome' => 'Finucci',
    'voti' => [6, 7, 5.5, 3],
  ],
  [
    'nome' => 'Gino',
    'cognome' => 'Pepp',
    'voti' => [9, 4, 8, 7],
  ]
];

function calcolaMedia($nums) {
  $qt = count($nums);
  $res = 0;
  foreach ($nums as $n) {
    $res += $n;
  }
  return $res/$qt;
}

foreach($classe as $alunno) {
  echo $alunno['nome'] . ' ' . $alunno['cognome'] . ' ' . calcolaMedia($alunno['voti']) . '<br>';
}