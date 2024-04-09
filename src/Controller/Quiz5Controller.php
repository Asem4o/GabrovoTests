<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Quiz5Controller extends AbstractController
{
    #[Route('/quiz/ok/5', name: 'quiz5')]
    public function index(Request $request, SessionInterface $session): Response
    {
        $questions = [
            [
                'question' => 'Коя от следните твърдения за кеш паметта е вярна?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Първият микропроцесор с интегрирана L1 кеш е Intel 80486DX.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Всички микропроцесори използват едно и също количество нива на кеш', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Архитектурата Харвард разделя кеш паметта на отделни секции за инструкции и данни', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'L1 кеш е винаги вграден в чипа на микропроцесора за максимално бързодействие', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],

            [
                'question' => 'Какви видове кеш памет се използват в микропроцесорите?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Неасоциативна кеш', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Асоциативна в няколко направления кеш', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Пълноасоциативна кеш', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Двупортова кеш', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Каква е ролята на протокола MESI в системите с кеш памет?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Осигурява кеширане на данните без проверка за валидност.', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Гарантира съгласуваност на кеш паметта между различните ядра на процесора.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Увеличава скоростта на четене от DRAM.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Намалява необходимостта от кеш памет.', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква архитектура на кеш паметта се предпочита за по-ефективно бързодействие при един и същ капацитет на паметта?',
                'answers' => [
                    ['id' => 'a', 'text' => ' Принстън', 'isCorrect' => false],
                    ['id' => 'b', 'text' => ' Харвард', 'isCorrect' => true],
                    ['id' => 'c', 'text' => ' Скаларна', 'isCorrect' => false],
                    ['id' => 'd', 'text' => ' Векторна', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],

            [
                'question' => 'Каква е основната функция на кеш паметта в микропроцесорите?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Запис и съхранение на операционната система.', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Подобряване на производителността чрез намаляване на времето за достъп до често използвани данни и инструкции', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Увеличаване на общия капацитет на оперативната памет.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Предотвратяване на загубата на данни при изключване на компютъра.', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кои характеристики са присъщи за RISC архитектурата?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Комплексни инструкции с множество цикли.', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Опростен набор от инструкции.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Еднаква дължина на всички инструкции.', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Поддръжка на множество регистри.', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какви са предимствата на DDR4 SDRAM в сравнение с DDR3 SDRAM?',
                'answers' => [
                    ['id' => 'a', 'text' => 'По-висока честота и пропускателна способност. ', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'По-ниска консумация на енергия.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Съвместимост с по-стари версии.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'По-висока плътност на данните.', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какви са основните разлики между ATA и SATA интерфейсите?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Скорост на пренос на данни.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Тип на конектора. ', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Максимална дължина на кабела.', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Поддръжка на hot-swap функционалност.', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Каква е основната роля на системните шини в компютъра?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Съхранение на данни.', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Пренос на данни между компонентите на системата.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Процесорно изчисление.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Управление на енергопотреблението.', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кои са характеристиките на супер-скаларните процесори?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Изпълнение на множество инструкции в един и същ тактов цикъл.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Използване на едно ядро за обработка на данни.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Ограничение до една инструкция на цикъл.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Автоматично разделяне на инструкциите на по-малки подинструкции.', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Кои от следните афирмации са верни за чипсетите с мостова архитектура? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'Разделяне на функциите между северен и южен мост.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Единен контролер за всички периферни устройства. ', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Подобрена производителност чрез разделяне на трафика.', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Поддръжка на високоскоростни интерфейси като PCIe.', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какви са предназначенията на PCI и PCI-e шините?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Възможност за паралелно свързване на устройства.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Поддръжка на висока пропускателна способност и ниска латентност.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Свързване на звукови и графични карти.', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Еднопосочен трансфер на данни.', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какви са разликите между физическата и логическата организация на твърдите дискове?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Форматиране на диска.', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Разпределение на секторите и пистите.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Файлова система и управление на данните.', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Капацитет на съхранение.', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],


            [
                'question' => 'Какви са основните параметри на твърдите дискове? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'Латентност и време за достъп.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Цветът на корпуса.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Интерфейсът на свързване.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Скоростта на въртене.', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
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
                'question' => 'Как се различават CD и DVD оптичните дискове? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'Вместимост на данни.', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Скорост на запис.', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Физически размер.', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Лазерната технология, използвана за четене и запис.', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Къде, освен при CPU, се използва кеш памет при персоналните компютри?',
                'answers' => [
                    ['id' => 'a', 'text' => 'В графичния процесор (GPU)', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'В оперативната памет (RAM)', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'В твърдия диск (HDD/SSD)', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Във външни периферни устройства', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'От какво зависи колко нива на кеш ще се използват при една компютърна система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'От архитектурата на процесора', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'От размера на оперативната памет (RAM)', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'От типа на операционната система', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'От видовете приложения, които се използват', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какви методи за кеширане използват фирми Intel и AMD при своите микропроцесори?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Интегрирано кеширане', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Външно кеширане', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Динамично кеширане', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Статично кеширане', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво прави Управляваща шина',
                'answers' => [
                    ['id' => 'a', 'text' => 'Комуникацията по системната шина е в синхронн', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Реализира еднопосочен обмен на данни', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Шината се използва от няколко устройства за предаване на данни', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Динамично пренасяне на данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
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

        return $this->render('quiz5/index.html.twig', [
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