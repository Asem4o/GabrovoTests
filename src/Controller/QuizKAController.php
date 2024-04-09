<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizKAController extends AbstractController
{

    #[Route('/quiz/ka/1', name: 'quiz_ka/1')]
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
                'question' => 'Какво действие се извършва от инструкцията: ADDI R3, R4, 5?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Добавя числото 5 към стойността, съхранена в регистър R4, и записва резултата в регистър R3.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Замества стойността в регистър R3 със сбора от стойностите в регистър R3 и R4.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Изважда числото 5 от стойността, съхранена в регистър R4, и записва резултата в регистър R3.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Умножава стойността в регистър R4 с числото 5 и записва резултата в регистър R3.', 'isCorrect' => false]
                ],
                'multipleCorrect' => false

            ],
            [
                'question' => 'Какво действие се извършва от инструкцията: LD F8, 8(R1)?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Зарежда в плаваща точка регистър F8 стойността от паметта, адресирана с базовия адрес в R1 плюс смещение 8.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Умножава стойността в плаваща точка регистър F8 с числото 8 и записва резултата в регистър R1.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Извършва логическо И между стойностите на регистър F8 и регистър R1 и записва резултата в регистър F8.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Прехвърля стойността от регистър R1 в регистър F8.', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Коя от следните инструкции е инструкция за трансфер на данни от регистрите на процесора в паметта?',
                'answers' => [
                    ['id' => 'a', 'text' => 'BEQ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'SW', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'LDLUI', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'LW', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Как се нарича режимът на адресиране в инструкцията: SUBI R4, R1, -12?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Пряк регистров', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Индиректен', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'С отместване', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Непосредствен', 'isCorrect' => true]
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Терминът "микроархитектура" се отнася за',
                'answers' => [
                    ['id' => 'a', 'text' => 'архитектурата на системата инструкции', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'реализацията на хардуерните логически схеми', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'начина на организиране на структурата на микропроцесора', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'системата инструкции, организацията на изчислителния процес и хардуер', 'isCorrect' => false]
                ],
                'multipleCorrect' => false
            ],
            [
            'question' => 'Законът на Амдал показва, че',
            'answers' => [
                ['id' => 'a', 'text' => 'броят на транзисторите в една ИС се удвоява на всеки две години', 'isCorrect' => false],
                ['id' => 'b', 'text' => 'броят на полезните паралелно работещи процесори е ограничен', 'isCorrect' => true],
                ['id' => 'c', 'text' => 'консумираната електрическа мощност е правопропорционална на размера на транзисторитеа', 'isCorrect' => false],
            ],
            'multipleCorrect' => false
            ],
            [
                'question' => 'Кои две изисквания са от първостепенно значение при проектиране на сървъри?',
                'answers' => [
                    ['id' => 'a', 'text' => 'производителност и цена', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'цена и консумирана енергия', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'производителност и отказоустойчивост', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'отказоустойчивост и цена', 'isCorrect' => false],
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Как се компенсира увеличението на броя инструкции, изпълнявани за един машинен цикъл, заради по-големия размер на кода при RISC процесорите?',
                'answers' => [
                    ['id' => 'a', 'text' => 'с увеличаване на тактовата честота', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'с намаляване на тактовата честота', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'с увеличаване на захранващото напрежение', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'с намаляване размера на кеш паметта', 'isCorrect' => false],
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Кой формат за кодиране на MIPS инструкции съдържа 2 полета: код на операцията и непосредствено зададено отместване?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Формат от тип R', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Формат от тип I', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Формат от тип J', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'с намаляване размера на кеш паметта', 'isCorrect' => false],
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'Кой етап в класическия 5-степенен конвейер се пропуска при изпълнение на аритметични инструкции?',
                'answers' => [
                    ['id' => 'a', 'text' => 'извличане на инструкция (IF)', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'достъп до паметта (MEM)', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'декодиране на инструкция (ID)', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'изпълнение (EX)', 'isCorrect' => false],
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => 'При изпълнение на инструкции за аритметични операции и инструкции за достъп до паметта в стандартен петстепенен конвейер могат да възникнат:',
                'answers' => [
                    ['id' => 'a', 'text' => 'структурни състезания', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'състезания за данни', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'състезания за управление', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'изпълнение (EX)', 'isCorrect' => false],
                ],
                'multipleCorrect' => false
            ],
            [
                'question' => '. Избройте видовете зависимости, които възникват между инструкциите при тяхното конвейерно изпълнение',
                'answers' => [
                    ['id' => 'a', 'text' => 'Структурни зависимости', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Зависимости от данни', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Зависимости от управление', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Състезания за данни', 'isCorrect' => false],
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

        return $this->render('quiz_ka/index.html.twig', [
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
