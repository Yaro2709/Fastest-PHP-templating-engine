<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $data = [ 
        (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
        
                (object) [
            "code" => 101, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 102, 
            "message" => "Повседневная практика показывает, что укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития."
        ],
        (object) [
            "code" => 103, 
            "message" => "Равным образом постоянный количественный рост и сфера нашей активности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 104, 
            "message" => "Не следует, однако забывать, что дальнейшее развитие различных форм деятельности способствует подготовки и реализации форм развития."
        ],
        (object) [
            "code" => 105, 
            "message" => "С другой стороны рамки и место обучения кадров способствует подготовки и реализации модели развития."
        ],
        (object) [
            "code" => 106, 
            "message" => "Таким образом новая модель организационной деятельности способствует подготовки и реализации систем массового участия."
        ],
        (object) [
            "code" => 107, 
            "message" => "Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям."
        ],
        (object) [
            "code" => 108, 
            "message" => "Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 109, 
            "message" => "Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений."
        ],
        (object) [
            "code" => 110, 
            "message" => "Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании существенных финансовых и административных условий."
        ],
    ];
    
    $start_timestamp = microtime(true);
    
    echo view('index', ['data' => $data]);
    
    $end_timestamp = microtime(true);
    $duration = $end_timestamp - $start_timestamp;
    echo $duration;
});
