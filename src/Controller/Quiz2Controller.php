<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Quiz2Controller extends AbstractController
{
    #[Route('/quiz/ok/2', name: 'quiz2')]
    public function index(Request $request, SessionInterface $session): Response
    {
        $questions = [
            [
                'question' => 'Каква е ролята на микропроцесора в компютърната система?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Съхранява временно данни', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Управлява външните устройства', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Изпълнява инструкции', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Съхранява постоянни данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],

            [
                'question' => 'Какво представлява оперативната памет?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Памет за дългосрочно съхранение на информация', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Памет, която задава инструкциите към процесора', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Памет, използвана за съхранение на BIOS', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Памет, която управлява външните устройства', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => ' Какво се случва, когато физическата памет на системата не е достатъчна?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Системата спира да работи', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Автоматично се увеличава физическата памет', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Започва да се използва виртуалната памет', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Намалява производителността на процесора', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво е MIPS?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Тип операционна система', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Формат на файловата система', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Измерване на производителността на процесора', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Вид оперативна памет', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е функцията на АЛУ (аритметично-логическо устройство)?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Управление на външни устройства', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Изпълнение на аритметични и логически операции', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Съхранение на временни данни', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Комуникация с операционната система', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво представлява CISC архитектурата?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Бърза и паралелна архитектура', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Архитектура с висока производителност за графични задачи', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Архитектура, оптимизирана за ефективност', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Бавна и не е паралелна архитектура', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е характеристиката на супер скаларната архитектура?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Използва единичен изпълнителен път', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Има поне два или повече изпълнителни пътеки, които работят паралелно', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Използва само скаларни инструкции', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Поддържа само линейно изпълнение на кода', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е функцията на BIOS?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Зарежда и управлява операционната система', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Предоставя базова конфигурация на компютъра и инициализира хардуера', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Съхранява важни системни файлове', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Управлява файловата система на хард диска', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е ролята на DMA (Direct Memory Access)?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Позволява на периферните устройства да обменят данни директно с оперативната памет, заобикаляйки процесора', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Управлява външните устройства на компютъра', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Изпълнява операционната система', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Съхранява временни данни за бърз достъп от процесора', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => ' Какво представлява EPROM паметта?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Памет, която може да се програмира многократно с електрически сигнали', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Памет с възможност за само еднократно програмиране', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Енергонезависима препрограмируема памет', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Памет, която не може да бъде препрограмирана', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е основната разлика между RISC и CISC архитектурите? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'RISC използва по-малко, но по-сложни инструкции ', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'CISC поддържа по-малък брой инструкции на по-висока скорост', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'RISC е оптимизирана за бързо изпълнение на прости инструкции', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'CISC използва директен достъп до паметта за всички операции ', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => '12: Какво представлява виртуалната памет?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Допълнителна RAM памет, добавена към системата', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Част от хард диска, използвана като оперативна памет при недостиг на RAM ', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Вид памет, използван само от видео картите', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Специализирана памет за съхранение на BIOS настройките', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => ' Какво е ALU (Аритметично-логическо устройство)?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Компонент, който управлява входно-изходните операции', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Устройство за съхранение на данни', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Част от процесора, отговорна за изпълнението на аритметични и логически операции', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Интерфейс за комуникация между различни устройства на компютъра', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво е FLOPS?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Формат на файловата система', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Вид оперативна памет', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Мера за скоростта на интернет връзката', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Измерване на производителността на процесора във връзка с плаваща точка операции за секунда', 'isCorrect' => true],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => ' Каква е функцията на регистрите в микропроцесора? ',
                'answers' => [
                    ['id' => 'a', 'text' => 'Съхраняват временно данни и инструкции, които процесорът използва', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Управляват външните устройства на компютъра', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Изпълняват операционната система', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Съхраняват постоянни данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => ' Какво представлява скаларната архитектура?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Архитектура, която обработва единици данни последователно', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Архитектура, която използва множество процесори за паралелна обработка на данни', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Архитектура, базирана на високоскоростна оперативна памет', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Тип памет, използвана в микропроцесорите', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кой е първият процесор, който поддържа използването на виртуална памет?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Intel 8086', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Intel 386', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'AMD Ryzen 7 3700X', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Apple M1', 'isCorrect' => false],
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

        return $this->render('quiz2/index.html.twig', [
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