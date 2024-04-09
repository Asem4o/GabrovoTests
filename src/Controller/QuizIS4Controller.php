<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizIS4Controller extends AbstractController
{

    #[Route('/quiz/is/5', name: 'quiz_IS_5')]
    public function index(Request $request, SessionInterface $session): Response
    {

        $session = $request->getSession();

        // Проверка дали сесията е стартирана (в повечето случаи не е нужно)
        if (!$session->isStarted()) {
            $session->start();
        }


        $questions =
            [
                [
                    'question' => 'Какво представлява Waterfall моделът?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Итеративен процес на разработка, при който проектът преминава през няколко фази на разработка и тестване в цикличен ред.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Модел на софтуерна разработка, който следва строга последователност от етапи, като всеки етап трябва да бъде завършен, преди да се премине към следващия.', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Гъвкав модел на разработка, който позволява на екипите да се връщат и да преработват предишни етапи в отговор на промени в изискванията или приоритетите', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Модел на управление на проекти, който се фокусира върху бързото доставяне на продукти чрез къси цикли на разработка, наречени спринтове.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво представлява V-моделът в разработката на софтуер?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Методология, която се фокусира върху непрекъснатата интеграция и доставка, като улеснява бързото разпространение на софтуерни актуализации.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Модел на разработка, който подчертава важността на тестването на софтуера на всеки етап от процеса на разработка, като съответните етапи на тестване са предварително определени за всяка фаза на разработка.', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Итеративен процес, който позволява на разработчиците да преработват и да подобряват продукта си въз основа на обратна връзка от крайните потребители.', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Стратегия за управление на проекти, която се фокусира върху постигането на максимална гъвкавост и адаптивност в отговор на променящите се изисквания и условия на пазара.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво представлява RAD моделът (Rapid Application Development) в разработката на софтуер?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Методология, която акцентира на бързата разработка и доставка на софтуер чрез интензивно взаимодействие с крайния потребител, използвайки прототипиране и итеративни цикли на обратна връзка.', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Традиционен модел на софтуерна разработка, който следва строга и последователна фаза на планиране, анализ, дизайн, имплементация и поддръжка, без възможност за връщане назад.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => ' Методология, която се фокусира върху непрекъснатото и едновременно тестване на всички етапи на разработка, за да се гарантира безгрешността на крайния продукт.', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Гъвкава методология за разработка, която подчертава на адаптивност и отговор на промяната, чрез кратки цикли на разработка, известни като спринтове, с цел бърза доставка на продукта.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво представлява шифрограма?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Игра с думи, която изисква от участниците да отгатнат скритите думи или фрази чрез визуални или звукови подсказки.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Метод за сигурна комуникация, при който съобщенията се пращат в открит вид и могат да бъдат прочетени от всеки.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Загадка или пъзел, който включва кодиране или шифроване на съобщение, като целта е съобщението да бъде декодирано или разшифровано с помощта на различни методи.', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Вид народна песен, която се използва за предаване на исторически събития или културни традиции.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво прави функцията fetch_array() в PHP?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Изпраща SQL заявка към базата данни и връща броя на засегнатите редове от заявката.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Създава нова таблица в базата данни със структура, определена от аргументите на функцията.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Връща следващия ред от резултатния набор като асоциативен, числов или и двата типа масив, в зависимост от аргумента, подаден на функцията.', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Променя структурата на съществуваща таблица в базата данни, като добавя, премахва или модифицира колони.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво прави функцията mysqli_data_seek() в PHP с MySQLi?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Изпраща SQL заявка към база данни и връща асоциирани или нумерирани масиви, съдържащи резултатите от заявката.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Променя позицията на вътрешния указател на резултатния набор към определен ред, позволявайки повторно извличане на данни от този ред.', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Създава нова таблица в базата данни или добавя нови редове към съществуваща таблица.', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Кодира специални символи в подаден стринг в контекста на SQL заявка, за да се предотвратят SQL инжекции.', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Какво е база със знания?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Колекция от компютърни игри и софтуер, предназначена за обучение и развлечение.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Специализирана база данни, организирана за събиране, организиране и достъп до знания и информация, която подпомага вземането на решения и предоставянето на помощ.', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Онлайн платформа за социални мрежи, където потребителите могат да споделят лична информация и съдържание.', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Система за управление на проекти, която позволява на екипите да планират, организират и следят прогреса на своите проекти в реално време.', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Какво е база с данни?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Система за криптиране на информация, която гарантира сигурността на данните чрез използване на сложни алгоритми.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Специализиран софтуер за редактиране на видео и аудио материали, който позволява комплексна обработка на мултимедия.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Организирана колекция от данни, структурирана така, че да може лесно да се достъпва, управлява и актуализира, обикновено съхранявана в електронен формат.', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Онлайн платформа за електронна търговия, която предлага разнообразие от продукти и услуги за покупка чрез интернет.', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Каква е основната цел на функцията mysqli_connect() в PHP?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'За да се извърши криптиране на данни преди тяхното съхранение в базата данни.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'За да се създаде нова таблица в базата данни.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'За да се установи връзка с MySQL база данни.', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'За да се изпрати електронно писмо чрез PHP скрипт.', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Какво представлява функцията mysqli_query() в контекста на PHP и MySQL?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Функция за създаване на нови MySQL потребители в базата данни.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Функция, която изпраща заявка към MySQL база данни и връща резултата.', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Метод за криптиране на пароли в PHP.', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Инструмент за визуално проектиране на MySQL бази данни.', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Какво означава функцията mysqli_close() в PHP?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Затваря текущо отворен файл в PHP скрипт.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Премахва всички записи от дадена таблица в MySQL база данни.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Затваря връзката с MySQL база данни.', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Изчиства кеш паметта на PHP скрипт.', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],

            ];


        // Проверка на сесията след запазване

        if ($request->isMethod('GET')) {
            shuffle($questions); // Разбъркваме въпросите при първоначално зареждане
            foreach ($questions as &$question) {
                shuffle($question['answers']); // Разбъркваме отговорите за текущия въпрос
            }
            $session->set('shuffled_questions', $questions);
        } else if ($request->isMethod('POST')) {
            $questions = $session->get('shuffled_questions', []); // Извличаме разбърканите въпроси от сесията при проверка на отговорите
        }

        $results = [];
        $score = 0; // Initialize score
        $maxScore = count($questions); // Total number of questions

        if ($request->isMethod('POST')) {
            $userAnswers = $request->request->all(); // Extract all data from the POST request

            foreach ($questions as $index => $question) {
                $questionKey = 'question_' . ($index + 1);
                $selectedAnswers = isset($userAnswers[$questionKey]) ? $userAnswers[$questionKey] : [];
                if (!is_array($selectedAnswers)) {
                    $selectedAnswers = [$selectedAnswers]; // Ensure it's an array
                }

                $correctAnswers = array_filter($question['answers'], function ($answer) {
                    return $answer['isCorrect'];
                });

                $correctIds = array_column($correctAnswers, 'id');
                $selectedCorrectIds = array_intersect($selectedAnswers, $correctIds);
                $selectedIncorrectIds = array_diff($selectedAnswers, $correctIds);

                $allowsMultipleCorrect = count($correctIds) > 1; // Check if multiple correct answers are allowed

                $questionScore = 0; // Initialize score for this question

                if ($allowsMultipleCorrect) {
                    // Add 0.5 points for each correct answer selected
                    $questionScore += 0.5 * count($selectedCorrectIds);
                    // Deduct 0.5 points for each incorrect answer selected
                    $questionScore -= 0.5 * count($selectedIncorrectIds);
                    // Ensure the score does not go below 0
                    $questionScore = max($questionScore, 0);
                    // Check if all correct answers are selected for full points
                    $isCompleteCorrect = count($selectedCorrectIds) == count($correctIds);
                    // Adjust the isCorrect flag based on whether all correct answers are selected
                    $isCorrect = $isCompleteCorrect && empty($selectedIncorrectIds);
                } else {
                    // For single correct answer questions, use your existing logic
                    $isCorrect = count($selectedCorrectIds) == 1 && empty($selectedIncorrectIds);
                    if ($isCorrect) {
                        $questionScore = 1; // Full point for correct answer
                    }
                }

                $score += $questionScore; // Add the calculated score for this question to the total score

                $correctAnswersTexts = implode(', ', array_column($correctAnswers, 'text'));
                $selectedAnswersTexts = implode(', ', array_map(function ($answer) use ($selectedAnswers) {
                    return in_array($answer['id'], $selectedAnswers) ? $answer['text'] : null;
                }, $question['answers']));

                $results[] = [
                    'question' => $question['question'],
                    'userAnswerTexts' => $selectedAnswersTexts,
                    'isCorrect' => $isCorrect,
                    'correctAnswerTexts' => $correctAnswersTexts,
                ];
            }
        }


        $percentage = ($score / $maxScore) * 100;
        $grade = $this->convertScoreToGrade($percentage); // Assuming you have a convertScoreToGrade function

        return $this->render('quiz_is_4/index.html.twig', [
            'questions' => $questions,
            'results' => $results,
            'grade' => $grade, // Pass the grade to the template
        ]);

    }

    private function convertScoreToGrade(float|int $percentage)
    {
        if ($percentage >= 90) return 6;
        if ($percentage >= 75) return 5;
        if ($percentage >= 60) return 4;
        if ($percentage >= 50) return 3;
        return 2;
    }
}