console.log("script ready");

insert_ligne()

function insert_ligne() {

    for (var i = 0; i < 5; i++) {

        var $parent = document.querySelector('.script_comdi');
        var $enfant = document.createElement('div');
        var $angle = ["none",
            "rotate(45deg)",
            "rotate(33deg)",
            "rotate(12deg)",
            "rotate(76deg)",
        ];
        var $positionX = ['none',
            '7',
            '15',
            '18',
            '24',
            '1',
        ];
        var $positionY = ['none',
            '2',
            '4',
            '9',
            '1',
            '12',
        ];



        $enfant.classList.add('ligne', 'flex');
        $parent.appendChild($enfant);



        $angle_rand = Math.random() * (5 - 0);
        $angle_round = Math.round($angle_rand);

        $positionX_rand = Math.random() * (6 - 0);
        $positionX_round = Math.round($angle_rand);

        $positionY_rand = Math.random() * (6 - 0);
        $positionY_round = Math.round($angle_rand);

        console.log($positionX_rand, $positionY_rand);

        $enfant.style.backgroundColor = 'red';
        //mettre un gradiant
        $enfant.style.transform = $angle.at($angle_round);
        $enfant.style.top = $positionX_round + "em";
        $enfant.style.left = $positionY_round + "em";
    }
}