<?php

// Checked for posted data
    // if(filter_has_var(INPUT_GET, 'data')) {
    //     echo 'Data Found.';
    // } else {
    //     echo 'No Data.';
    // }
    // if(filter_has_var(INPUT_POST, 'data')) {
    //     if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
    //         echo 'Valid Email';
    //     } else {
    //         echo 'Invalid Email';
    //     }
    // }

    if(filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];
        // remove illegal data
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email . '<br/>';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is Valid';
        } else {
            echo 'Email is not valid';
        }
    }
    echo '<br/>';

        #FILTER_VALIDATE_BOOLEAN
        #FILTER_VALIDATE_EMAIL
        #FILTER_VALIDATE_FLOAT
        #FILTER_VALIDATE_INT
        #FILTER_VALIDATE_IP
        #FILTER_VALIDATE_REGEXP
        #FILTER_VALIDATE_URL

        #FILTER_SANITIZE_EMAIL
        #FILTER_SANITIZE_ENCODED
        #FILTER_SANITIZE_NUMBER_FLOAT
        #FILTER_SANITIZE_NUMBER_INT
        #FILTER_SANITIZE_SPECIAL_CHARS
        #FILTER_SANITIZE_STRING
        #FILTER_SANITIZE_URL
        
    // $num = '2df0';
    // if(filter_var($num, FILTER_VALIDATE_INT)) {
    //     echo $num . 'is a number';
    // } else {
    //     echo $num . 'is not a number';
    // }

    // $var = 'dkf3490dksfjs340sdfk430@#$dlskf434';
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    // $var = '<script>alert("Hacked");</script>';
    // // echo $var;
    // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    // $filters = [
    //     'data' => FILTER_VALIDATE_EMAIL,
    //     'data2' => [
    //         'filter' => FILTER_VALIDATE_INT,
    //         'options' => [
    //             'min_range' => 1,
    //             'max_range' => 200
    //         ]
    //     ]
    // ];

    // echo("<pre>");
    //     print_r(filter_input_array(INPUT_POST, $filters));
    // echo("</pre>");

    $arr = [
        'name' => 'taen ahammed',
        'age' => 520,
        'email' => 'taen@gmail.com'
    ];

    $filters = [
        'name' => [
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ],
        'age' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 120
            ]
        ],
        'email' => FILTER_VALIDATE_EMAIL
    ];

    echo '<pre>';
        print_r(filter_var_array($arr, $filters));
    echo '</pre>';
?>  


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
    <input type="text" name='data'>
    <input type="text" name='data2'>
    <input type="submit" value='Submit'>
</form>