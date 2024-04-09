<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizKA2Controller extends AbstractController
{

    #[Route('/quiz/ka/2', name: 'quiz_ka/2')]
    public function index(Request $request, SessionInterface $session): Response
    {
        $clientIp = $request->getClientIp();
        $logFile = 'C:\xampp\htdocs\public\log.txt';
        date_default_timezone_set('Europe/Sofia');
        $logEntry = sprintf("[%s] - %s\n", date('Y-m-d H:i:s'), $clientIp);
        file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
        $session = $request->getSession();

        // Проверка дали сесията е стартирана (в повечето случаи не е нужно)
        if (!$session->isStarted()) {
            $session->start();
        }


        $questions = [

            [
                'question' => 'Какво действие се извършва от инструкцията: ADDI R2, R3, 100? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'Добавя числото 100 към стойността, съхранявана в регистър R3, и записва резултата в регистър R2.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Изважда числото 100 от стойността, съхранявана в регистър R3, и записва резултата в регистър R2.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'множава стойността, съхранявана в регистър R3, по числото 100 и записва резултата в регистър R2.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Прехвърля стойността от регистър R3 в регистър R2.', 'isCorrect' => false],
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Какво действие се извършва от инструкциите: LD, LW, LB?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Прехвърлят данни от паметта към регистъра.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Прехвърлят данни от регистъра към паметта.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Извършват логическа операция между данните в регистъра и паметта.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Извършват аритметична операция между данните в регистъра и паметта.', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
                ],
            [
                'question' => 'Коя от следващите инструкции не е инструкция за преход?',
                'answers' => [
                    ['id' => 'a', 'text' => 'BEQ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'BNE', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'JAL', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'SLT', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Запишете инструкцията, с която една дума се записва в RAM паметта.',
                'answers' => [
                    ['id' => 'a', 'text' => 'LW (Load Word)', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'LB (Load Byte)', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'SW (Store Word)', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'SB (Store Byte)', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Терминът хардуер се използва за',
                'answers' => [
                    ['id' => 'a', 'text' => 'архитектурата и организацията на системата', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'детайлното представяне на компютъра на ниво логически схеми', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'начина на организиране на структурата на микропроцесора', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'системата инструкции', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Подобрението в производителността, постигнато при използване на повече процесорни ядра е ограничено от размера на онзи част от програмата, която не може да се изпълнява паралелно е принцип познат като:',
                'answers' => [
                    ['id' => 'a', 'text' => 'закон на Амдал', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'съсредоточаване върху общия случай', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'закон на Денард', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'закон на Мур', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Кое от посочените изисквания не е основно при проектиране на компютърни системи от класа на скалируемите сървърни хранилища (WSC)?',
                'answers' => [
                    ['id' => 'a', 'text' => 'производителност', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'цена', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'консумирана енергия', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'отказоустойчивост', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Идеята за конвейерна обработка е паралелизъм на ниво:',
                'answers' => [
                    ['id' => 'a', 'text' => 'инструкции', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'нишки', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'заявки', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'При коя от изброените системи инструкции повечето инструкции имат достъп до паметта?',
                'answers' => [
                    ['id' => 'a', 'text' => '“register-memory” (регистър-памет)', 'isCorrect' => false],
                    ['id' => 'b', 'text' => '“load-store” (зареждане-съхранение)', 'isCorrect' => true],
                    ['id' => 'c', 'text' => '„stack“ (стекова архитектура)', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Кой от изброените режими на адресиране не е основен в системата инструкции RISC-V?',
                'answers' => [
                    ['id' => 'a', 'text' => 'регистрово', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'непосредствено или пряко', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'с отместване', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'адресиране с автоматично нарастване и намаляване', 'isCorrect' => true]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'На кой етап, при изпълнение на инструкции в конвейера, се извършват аритметичните операции?',
                'answers' => [
                    ['id' => 'a', 'text' => 'извличане на инструкция (IF)', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'декодиране на инструкция (ID)', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'изпълнение (EX)', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'достъп до паметта (MEM)', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Кои състезания възникват при наличие на конфликти за заемане на ресурси?',
                'answers' => [
                    ['id' => 'a', 'text' => 'структурни състезания', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'състезания за данни', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'състезания за управление', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'достъп до паметта (MEM)', 'isCorrect' => false]
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

        return $this->render('quiz_ka2/index.html.twig', [
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
