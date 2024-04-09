<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizIS3Controller extends AbstractController
{

    #[Route('/quiz/is/4', name: 'quiz_IS_4')]
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
                    'question' => 'Какво представлява Структурния анализ?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Метод за разработване на софтуер, базиран на класове и обекти', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Метод, при който системите се представят чрез абстрактни диаграми на потоците от данни', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Процес на създаване на компоненти и тяхната взаимодействия', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Подход за документиране на системни изисквания', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво е основната цел на диаграмите на потоците от данни (DFD)?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Да представят възможностите за наследяване между класовете', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Да илюстрират последователността от операции в системата', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Да моделират преобразуването на данните в информация', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Да опишат взаимодействието между различни системи', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво представлява миниспецификацията в контекста на структурния анализ?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Подробно описание на интерфейсите на системата', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Детайлно описание на алгоритъма на процеса', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Спецификация на входните и изходните данни за системата', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Графично представяне на потоците от данни', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Каква е ролята на класовете в обектноориентирания анализ?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Да представят процесите в системата', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Да моделират външните обекти взаимодействащи с системата', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Да съдържат множество от логически свързани данни и операции', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Да илюстрират потоците от данни между различни системни компоненти', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво показва диаграмата на класовете в контекста на UML?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Преобразуването на данните в информация', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Взаимодействието между потребителите и системата', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Класовете и техните връзки в системата', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Последователността от операции в системата', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Каква е основната цел на структурното проектиране на информационни системи?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Да се определи структурата на системата като йерархична структура от функционално обособени модули', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Да се интегрират различни компоненти в единна система', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Да се създаде детайлизиран модел на системата използвайки UML диаграми', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Да се подобри бързодействието и сигурността на системата', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Какво представлява обектноориентираното проектиране на информационни системи?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Процес на дефиниране на компонентите на системата и тяхната функционалност', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Процес, който използва класове и обекти за моделиране на системата', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Метод за интеграция на различни софтуерни платформи', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Техника за оптимизиране на бази данни', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Какви са основните елементи на структурното проектиране?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Класове и обекти', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Функционални дървета и диаграми на потока от данни', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Компоненти и интерфейси', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Пакети и модули', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Кои са двата основни модела, представени в обектноориентираното проектиране?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Статичен и динамичен модел', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Функционален и нефункционален модел', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Компонентен и модулен модел', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Декларативен и императивен модел', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Какво представлява проектирането на ИС на базата на компоненти?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Използване на предварително дефинирани компоненти за създаване на системата', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Създаване на система изключително чрез обектноориентирано програмиране', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Процес на интеграция на различни бази данни', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Разработване на системата използвайки само структурно програмиране', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Каква е ролята на диаграмите на потока от данни в структурното проектиране?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Да моделират времето за изпълнение на процесите', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Да представят взаимодействието между различните компоненти на системата', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Да илюстрират потребителския интерфейс на системата', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Да кодират системата с използване на специфичен програмен език', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Кои са ключови елементи в обектноориентираното проектиране?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Функции и процедури', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Класове и обекти', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Сценарии и тестове', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Модули и пакети', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Как се възползва обектноориентираното проектиране от полиморфизма?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Чрез повторно използване на код в различни контексти без промяна', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Чрез разделяне на програмния код на модули', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Чрез автоматично генериране на потребителски интерфейс', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Чрез създаване на динамични уеб страници', 'isCorrect' => false]
                    ],
                    'multipleCorrect' => false
                ],
                [
                    'question' => 'Какви са предимствата на проектирането на ИС на базата на компоненти?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Ускорява процеса на разработка чрез използване на готови компоненти', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Изисква по-малко тестове, тъй като компонентите вече са проверени', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Позволява по-лесна поддръжка и актуализация на системата', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Намалява общите разходи за разработка и внедряване на системата', 'isCorrect' => true]
                    ],
                    'multipleCorrect' => true
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

        return $this->render('quiz_is_3/index.html.twig', [
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