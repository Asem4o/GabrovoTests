<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizIS1Controller extends AbstractController
{

    #[Route('/quiz/is/2', name: 'quiz_IS_2')]
    public function index(Request $request, SessionInterface $session): Response
    {

        $session = $request->getSession();

        // Проверка дали сесията е стартирана (в повечето случаи не е нужно)
        if (!$session->isStarted()) {
            $session->start();
        }


        $questions = [
            [
                'question' => 'Как се свързва PHP скрипт с MySQL база данни?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Използване на функцията mysql_connect()', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Използване на функцията mysqli_connect()', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Използване на функцията connect_db()', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Използване на функцията db_connect()', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какви мерки за сигурност трябва да се предприемат при свързването на PHP към MySQL база данни?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Използване на статични пароли', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Използване на хеширани пароли', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Използване на SQL инжекции за проверка на сигурността', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Ограничаване на достъпа до БД само от localhost', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Каква е целта на тестване на принципа на черната кутия?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Тестване на вътрешната структура на кода', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Тестване на функционалността без знание за вътрешната структура', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Тестване само на програмния интерфейс', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Идентифициране на всички възможни грешки в кода', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кои функции в PHP се използват за извличане на данни от MySQL база данни?',
                'answers' => [
                    ['id' => 'a', 'text' => 'mysqli_fetch_array()', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'fetch_data()', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'mysqli_data_seek()', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'get_array()', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какво представлява шифрограмата в контекста на информационните системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Криптографски преобразуван текст', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Грешка в програмния код', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Диаграма за бази данни', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Модел на информационна система', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],


            [
                'question' => 'Коя от следните практики е препоръчителна за защита на информационната система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Използване на прости пароли за лесен достъп', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Редовно актуализиране на софтуера', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Пазене на паролите в текстов файл на сървъра', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Отворен достъп до базата данни за всички потребители', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Как се осъществява връзка към MySQL база данни в PHP?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Използването на PDO (PHP Data Objects)', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Пряко вграждане на SQL в HTML', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Използване на JavaScript за връзка към базата данни', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Използване на CSS за стилизиране на данните', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кои от следните техники се използват при тестването на информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Тестване базирано на компоненти', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Интеграционно тестване', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Тестване на производителността', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Тестване с въведене на грешни данни', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Каква е целта на функционалното тестване?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Проверка на вътрешната структура на програмния код', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Проверка дали програмата изпълнява зададените функции', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Определяне на производителността на системата', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Тестване на потребителския интерфейс', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какви методи за защита на информацията се прилагат в информационните системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Криптиране на данните', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Използване на фаеруоли', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Физическа защита на сървърите', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Публикуване на паролите за обществен достъп', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Коя функция в PHP се използва за извличане на ред от резултатите на заявка към MySQL?',
                'answers' => [
                    ['id' => 'a', 'text' => 'mysqli_fetch_row()', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'mysqli_execute()', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'mysqli_query()', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'mysqli_fetch_array()', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            // Добавете останалите 5 въпроса според нуждите на темата.
            [
                'question' => 'Какви са основните дейности, извършвани в рамките на софтуерния процес при проектирането на информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Тестване на системата и експлоатация', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Анализиране и дефиниране на изискванията, проектиране на системата', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Обучение на потребителите', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Разработване на маркетингова стратегия', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кои са основните участници в разработката на информационни системи и какви роли те изпълняват?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Клиенти, потребители, и маркетингови специалисти', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Аналитици, проектанти, програмисти', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Финансови консултанти', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Правни консултанти', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво представлява архитектурният проект на информационна система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Документ, описващ маркетинговата стратегия на системата', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Визуализация на потребителския интерфейс', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Проект с високо ниво на абстракция, описващ структурата на системата', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Списък на използваните технологии и библиотеки', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'По какви основни стадии преминава проектирането и реализацията на една информационна система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Предпроектен, разработване, внедряване, наблюдение и анализ', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Анализ на пазара, разработване на продукта, лансиране на продукта', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Създаване на концепция, дизайн, предпродажби', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Тестване, маркетинг, продажби', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какви са етапите и основните задачи при детайлното проектиране на информационна система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Определяне на маркетингови стратегии и продажби', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Специфициране на функциите на системата, изискванията към хардуера', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Планиране на корпоративни събития', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Разработване на фирмена идентичност', 'isCorrect' => false],
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

        return $this->render('quiz_is_1/index.html.twig', [
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