<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class QuizISController extends AbstractController
{

    #[Route('/quiz/is/1', name: 'quiz_is')]
    public function index(Request $request, SessionInterface $session): Response
    {

        $session = $request->getSession();

        // Проверка дали сесията е стартирана (в повечето случаи не е нужно)
        if (!$session->isStarted()) {
            $session->start();
        }


        $questions = [
            [
                'question' => 'Кое от изброените понятия е същност на информационните системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Приложен софтуер', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Хардуерни компоненти', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Мрежова инфраструктура', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Физическа сигурност', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какви видове информационни системи съществуват?',
                'answers' => [
                    ['id' => 'a', 'text' => 'ПИС - познавателни информационни системи', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'ИСС – информационна справочни системи', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'ИТС – информационни търсещи системи', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'БИС – бизнес информационни системи', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Кои от следните са етапи в разработката на информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Проектиране', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Анализ на изискванията', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Тестване', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Поддръжка', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какви са характеристиките на структурните данни?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Фиксирани', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Полуструктурирани', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Изразени с характеристика', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Под формата на текст', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво представлява процесът на проектиране в контекста на информационните системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Създаване на хардуерни компоненти', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Творчески процес по създаване на информационната система', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Изграждане на мрежова инфраструктура', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Разработка на софтуерни приложения', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Кои модели се използват в разработката на информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Waterfall model', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'V model', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Cleanroom engineering', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'RAD MODEL', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],


            [
                'question' => 'Кои от следните компоненти са част от жизнения цикъл на информационна система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Планиране', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Анализ', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Реализация', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Отстраняване на грешки', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какви са предимствата на използването на информационна система от бази данни?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Няма повтаряща се информация', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Няма излишна информация', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Увеличена скорост на обработка на данни', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Подобрена сигурност на данните', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какво представлява метазнанието в контекста на информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Знания за съхранение на данни', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Знания за самите знания', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Данни, получени от анализ на информация', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Информация, използвана за създаване на нови бази данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какви видове тестване се прилагат при разработката на информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Тестване на принципа на черната кутия', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Тестване на принципа на бялата кутия', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Функционално тестване', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Нефункционално тестване', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какво е индексиране в контекста на информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Процес на организация на данните по алфабетен ред', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Създаване на структури за бърз достъп до информация', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Подреждане на информацията по дата на създаване', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Класификация на информацията по теми', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Кои от следните са видове информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'ГИС – географски информационни системи', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'БИС – бизнес информационни системи', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'ИИС – информационни изчислителни системи', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'ИТС – информационни търсещи системи', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какви са основните компоненти на информационна система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Предназначение', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Потребители', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Обекти', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Технология / дейности / функции', 'isCorrect' => true],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Как се извършва проекционно моделиране в информационните системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Чрез установяване на връзки условие -> следствие', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Използване на Frame модели', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Прилагане на мрежови модели', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Създаване на обектно-ориентирани бази данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => true,
            ],
            [
                'question' => 'Какво представлява евристиката в контекста на информационни системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Метод за решаване на проблеми, който не е гарантирано оптимален или съвършен', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Алгоритъм за сортиране на данни', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Система за управление на бази данни', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Протокол за комуникация в мрежи', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кои подходи се използват за защита на информация в информационните системи?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Обектно-ориентиран подход', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Компонентен подход', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Симетрични и асиметрични методи', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Функционално и нефункционално тестване', 'isCorrect' => false],
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

        return $this->render('quiz_is/index.html.twig', [
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