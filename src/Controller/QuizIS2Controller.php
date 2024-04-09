<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizIS2Controller extends AbstractController
{

    #[Route('/quiz/is/3', name: 'quiz_IS_3')]
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
                    'question' => 'Каква е основната цел на първата фаза в класическия жизнен цикъл на софтуерните системи?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Създаване на програмен код', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Тестване на системата', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Определяне приложната област и дефиниране на изискванията', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Съпровождане и въвеждане', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Коя фаза включва създаването на детайлен проект на системата и определяне на софтуерната архитектура?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Анализ и дефиниция', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Проектиране', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Разработка', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Тестване', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Кои от следните са типове на жизнения цикъл на софтуерните системи?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Последователни и итеративни модели', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Статични и динамични модели', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Функционални и ориентирани към данни модели', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Ориентирани към правила и ориентирани към състояния модели', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какви са основните средства използвани в ориентирания към данни подход?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Функции и функционални дървета', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Речник на данните и идентичност-връзка модел', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Диаграми на сътрудничество и последователност', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Крайни автомати и мрежи на Петри', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Кои от изброените са базови средства на ориентирания към сценарии подход?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Съобщения, сценарии, диаграми на сътрудничество и последователност', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Речник на данните и идентичност-връзка модел', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Функции и функционални дървета', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Крайни автомати и мрежи на Петри', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],

                [
                    'question' => 'Кое от следните описания съответства на модела на потока от данни?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Описва ролите на участниците в разработката и дейностите, които извършват', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Описва последователността от дейности в процеса на разработка', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Описва дейностите, свързани с преобразуване на данни', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Представя разработваната система като последователност от версии', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какъв тип модел е Каскадният модел (модел на водопада)?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Итеративен модел', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Предписателен модел', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Описателен модел', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Прототипен модел', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Коя фаза НЕ е част от Каскадния модел (модел на водопада)?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Събиране на изискванията към системата', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Планиране – изготвяне на график', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Внедряване и поддържане', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Оценка на риска', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Кой от изброените е пример за език за моделиране на процеси?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'C++', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'UML (Unified Modeling Language)', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'HTML', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'SQL', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Коя характеристика НЕ съответства на Итеративния модел?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Позволява използването на нови технологии в процеса на разработка', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Разработката на системата се реализира на стъпки с доставка на цялата функционалност наведнъж', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Първите стъпки могат да служат като прототип', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'На всяка стъпка се доставя човек', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Коя фаза от жизнения цикъл на софтуерните системи включва създаването на детайлен проект на системата и определяне на софтуерната архитектура?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Събиране на изискванията', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Планиране', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Анализ и проектиране', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Реализация и тестване', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],

                [
                    'question' => 'Коя фаза предшества реализацията на информационните системи?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Тестване', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Проектиране', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Внедряване', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Анализ на изискванията', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво е основната задача при реализацията на информационни системи?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Тестване на системните компоненти', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Реализиране на системата на избран език за програмиране', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Спазване на спецификацията', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Разработване на документация', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Кой от изброените е метод за тестване на софтуерни системи?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Black-box тестване', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Графично моделиране', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Структурно програмиране', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Функционално декомпозиране', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Кое от следните твърдения е верно за структурното тестване (Write-box)?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Тестване се извършва без познаването на вътрешната структура на кода', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Тестване е ориентирано към потребителя', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Тестване се основава на познаването на програмния код и архитектурата', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Тестване се извършва само на графичния интерфейс на системата', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Кое от следните НЕ е част от добрия стил на програмиране?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Използване на коментари', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Подходящ избор на имена и идентификатори', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Осигуряване на преносимост и бързодействие', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Избягване на документацията', 'isCorrect' => true],
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

        return $this->render('quiz_is_2/index.html.twig', [
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