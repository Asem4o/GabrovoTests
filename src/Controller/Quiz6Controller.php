<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Quiz6Controller extends AbstractController
{
    #[Route('/quiz/ok/6', name: 'quiz6')]
    public function index(Request $request, SessionInterface $session): Response
    {
        $questions = [
            [
                'question' => 'Каква е основната функция на микропроцесора?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Съхранение на данни', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Изпълнение на инструкции', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Управление на входно-изходните устройства', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Поддържане на операционната система', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],

            [
                'question' => 'Какво представлява оперативната памет?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Устройство за съхранение на данни', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'АУстройство за изпълнение на програми', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Памет, задаваща инструкциите към процесора', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Външно запомнящо устройство', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво се случва, когато физическата памет е недостатъчна?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Системата се изключва', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Използва се виртуална памет', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Процесорът намалява скоростта си', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Увеличава се капацитетът на оперативната памет', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква роля изпълнява файловата система при зареждане на операционната система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Съхранява временни файлове', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Управлява външните устройства', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Зарежда инструкциите за работа', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Заделя пространство на диска', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво е драйвер?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Вид компютърен вирус', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Специализирана програма за управление и настройка на аппаратни компоненти', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Онлайн платформа за социални мрежи', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Тип компютърна игра', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Как се записва информацията на компакт дискове?',
                'answers' => [
                    ['id' => 'a', 'text' => 'По множество концентрични кръгове', 'isCorrect' => false],
                    ['id' => 'b', 'text' => ' В единствена пътечка под формата на Архимедова спирала, започваща от вътрешната страна', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Чрез случайно разпределение на блокове по повърхността на диска', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'По вертикални линии от горе до долу', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],

            [
                'question' => 'С какво се отличава RISC архитектурата от CISC?',
                'answers' => [
                    ['id' => 'a', 'text' => 'По-бърза и паралелна обработка', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'По-бавна и последователна обработка', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Използва само външна памет', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Не поддържа масивна паралелна архитектура', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво е MIPS?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Тип операционна система', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Вид памет', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Измерване на производителността на процесора', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Модел процесор', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Коя от следните архитектури позволява най-малкото количество информация, което може да се прочете, да бъде 512 байта?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Скаларна архитектура ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Супер скаларна архитектура', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'VLIW', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Секторна архитектура', 'isCorrect' => true],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е функцията на BIOS?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Зарежда операционната система', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Проверява дали компонентите на компютъра са здрави при стартиране', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Създава графичен интерфейс за потребителя', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Управлява външната памет', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какво представлява DMA (Direct Memory Access)?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Метод за пряк достъп до операционната система', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Техника за бързо копиране на данни между периферни устройства и паметта без намесата на процесора', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Специален вид оперативна памет', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Програма за управление на дисковете', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е ролята на чипсета в компютърната система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Съхранява BIOS', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Осигурява енергия за компонентите', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Управлява комуникацията между процесора, паметта и периферните устройства', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Съхранява операционната система', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво е ALU (Аритметично логическо устройство)?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Част от процесора, отговорна за изпълнението на аритметични и логически операции', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Тип оперативна памет ', 'isCorrect' => false],
                    ['id' => 'c', 'text' => ' Устройство за съхранение на данни', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Външно устройство за въвеждане на данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво представлява EPROM?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Вид оперативна памет', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Външно запомнящо устройство', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Енергонезависима препрограмируема памет', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Вид процесор', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Как се нарича най-бързата памет в компютъра, през която минават всички входни и изходни данни?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Кеш памет', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Оперативна памет', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Регистри', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Виртуална памет', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],


            [
                'question' => 'Какво е FLOPS?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Вид операционна система', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Мярка за измерване на производителността на процесора, основана на изчисления с плаваща запетая за секунда', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Тип памет', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Модел на процесор', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е ролята на северния и южния мост в компютърната архитектура?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Управление на външната памет', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Комуникация между различни компоненти на системата', 'isCorrect' => true],
                    ['id' => 'c', 'text' => ' Съхранение на операционната система', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Зареждане на BIOS', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво означава терминът "скаларна архитектура"?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Архитектура, поддържаща изпълнението на една инструкция в един момент от време', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Масивна паралелна архитектура', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Система за управление на външни устройства', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Тип файлова система', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кой е първият процесор със скаларна архитектура',
                'answers' => [
                    ['id' => 'a', 'text' => 'Pentum p5 ', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Intel 8086', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'AMD Ryzen 7', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Apple M1', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Коя хъбова архитектура се отнася за Северен мост',
                'answers' => [
                    ['id' => 'a', 'text' => 'MCH', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'ICH', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Super I/O', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'VLIW ', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
            'question' => 'Трафикът по PCI шината е',
            'answers' => [
                ['id' => 'a', 'text' => 'Адреси и данни', 'isCorrect' => true],
                ['id' => 'b', 'text' => 'Команди', 'isCorrect' => true],
                ['id' => 'c', 'text' => 'Програмен', 'isCorrect' => false],
                ['id' => 'd', 'text' => 'Апаратен', 'isCorrect' => false],
            ],
            'multipleCorrect' => true,
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

        return $this->render('quiz6/index.html.twig', [
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