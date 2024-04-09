<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class QuizController extends AbstractController
{

    #[Route('/quiz/ok', name: 'quiz_ok')]
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
                'question' => 'Кой от изброените микропроцесори на Intel не е многоядрен?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Itanium', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Core i5', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Core i7', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Pentium PII', 'isCorrect' => true],
                ],
                'multipleCorrect' => false,
            ],

            [
                'question' => 'Коя от изброените шини не е от споделен тип?',
                'answers' => [
                    ['id' => 'a', 'text' => 'ISA', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'EISA', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'PCI', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'PCI-Express', 'isCorrect' => true],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'При кой оптичен дисков носител, информацията се записва по време на производството му?',
                'answers' => [
                    ['id' => 'a', 'text' => 'CD-ROM', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'DVD-RAM', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'CD-R ', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'CD-RW', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Колко адресни компаратора има кеш паметта на микропроцесор I80486',
                'answers' => [
                    ['id' => 'a', 'text' => 'един', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'четири', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'два', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'осем', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кое от следните твърдения най-добре описва RAMBUS RAM?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Вид операционна система, специализирана за мобилни устройства.', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Технология за безжична комуникация между различни електронни устройства.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Тип динамична RAM памет, разработена за високоскоростен достъп и предаване на данни.', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Софтуерна платформа за разработка на приложения с отворен код.', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],

            [
                'question' => 'BIOS и UEFI разлики',
                'answers' => [
                    ['id' => 'a', 'text' => 'UEFI предлага по-добра сигурност чрез функции като Secure Boot', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'UEFI поддържа по-бързо стартиране на системата в сравнение с BIOS.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'BIOS не поддържа графичен потребителски интерфейс, докато UEFI го прави', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'BIOS използва текстови файлове за конфигурация, докато UEFI използва XML', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Маркирайте верните твърдения',
                'answers' => [
                    ['id' => 'a', 'text' => 'Pentium III има су  пер-скаларна архитектура', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'DDR 2 е тип синхронна DRAM.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => '80486 може да работи в „защитен” режими', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Времето за достъп при твърдите дискове е няколко секунди', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Размерът на един клъстер (блок) от диска винаги е равен на размера на един сектор', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'PATA е',
                'answers' => [
                    ['id' => 'a', 'text' => 'Паралелен интерфейс за връзка с външни запомнящи устройства.  ', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Последователен интерфейс за връзка с външни запомнящи устройства ', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Шина която свързва двата моста на чипсета.  ', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Времето за достъп при твърдите дискове е няколко милисекундиL', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Шина която свързва бавната периферия с южния мост. ', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Маркирайте верните твърдения',
                'answers' => [
                    ['id' => 'a', 'text' => 'Pentium 4 e 64-битов микропроцесор. ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'SRAM е тип синхронна оперативна памет. ', 'isCorrect' => false],
                    ['id' => 'c', 'text' => '80386 може да работи в режим V86. ', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Логическото форматиране се реализира чрез команда FORMAT (ОС Windows).', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'При DVD-RW запомнящият слой е специална органична боя. ', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Маркирайте шината, към която може да свърже видеоконтролер:',
                'answers' => [
                    ['id' => 'a', 'text' => 'LPC ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'PCI', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'HIB ', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'FSB ', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Количеството информация, което може да се запише на един DVD диск (едностранен и еднослоен',
                'answers' => [
                    ['id' => 'a', 'text' => '720 KB ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => '4.7 MB', 'isCorrect' => false],
                    ['id' => 'c', 'text' => '4.7 GB ', 'isCorrect' => true],
                    ['id' => 'd', 'text' => '9.4 GB ', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кое твърдение е вярно за архитектура VLIW? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'Разновидност на CISC архитектурата.  ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Разновидност на RISC архитектурата. ', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Паралелна на апаратно ниво архитектура. ', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Паралелна на програмно ниво архитектура. ', 'isCorrect' => true],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какъв тип прекъсвания обработва контролера на прекъсванията',
                'answers' => [
                    ['id' => 'a', 'text' => 'Програмни', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Апаратни, немаскируеми. ', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Апаратни, маскируеми.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Всички изброени типове. ', 'isCorrect' => true],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'В колко направления е асоциативната памет',
                'answers' => [
                    ['id' => 'a', 'text' => 'две', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'чеитири', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'осем', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'тридесет и две', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],


            [
                'question' => 'Кой модул от чипсетите с хъбова архитектура директно управлява бързата периферия? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'MCH ', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'FWH ', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'ICH ', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Super I/O чип. ', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Маркирайте верните твърдения:',
                'answers' => [
                    ['id' => 'a', 'text' => 'EIDE е интерфейс чрез който се управляват HD, CD и DVD. ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Процесорите Itanium имат 3 нива вградена кеш. ', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'CISC е архитектура, паралелна на апаратно ниво', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'При CD-R дисковете запомнящият слой е специална сплав от Ag, In, Sb и Te. ', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Базовата скорост на четене при CD е 150KB/s.  ', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какво е предназначението на AGP? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'Специализиран интерфейс за видеокарти', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'CISC е архитектура, паралелна на апаратно ниво', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Апаратни, маскируеми.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'може да работи в „защитен” режими', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кой е първият процесор, който включва L1 кеш памет?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Intel 8086', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Intel 386', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Intel 486', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'AMD Ryzen 7 3700X', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' =>'Кой процесор използва VLIW (Very Long Instruction Word) архитектура?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Intel Pentium', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Intel Itanium', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Intel 486', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'AMD Ryzen 7 3700X', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Опишете как шина PCI-e преодолява основните недостатъци на шина PCI',
                'answers' => [
                    ['id' => 'a', 'text' => 'Увеличава скоростта на предаване на данни', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Предоставя по-голяма пропускливост', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Използва множество независими линии за предаване на данни', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Увеличава броя на свързаните устройства', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Как се реализира QoS при шина PCI-e?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Чрез гарантиране на предпочитан достъп до лентата на шината за определени устройства или видове трафик', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Чрез увеличаване на ширината на шината', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Чрез споделяне на ресурсите равномерно между всички устройства', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Чрез използване на допълнителни адаптери за мрежов контролер', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ]


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

        return $this->render('quiz/index.html.twig', [
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
        return 2 ;
    }

}
