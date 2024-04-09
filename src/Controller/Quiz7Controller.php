<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Quiz7Controller extends AbstractController
{
    #[Route('/quiz/ok/7', name: 'quiz7')]
    public function index(Request $request, SessionInterface $session): Response
    {
        $questions =
            [
                [
                    'question' => 'Кои от следните твърдения за микропроцесорите са верни?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Използват кеш памет за ускоряване на достъпа до данни', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Работят единствено с оперативната памет', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Използват масивна паралелна архитектура за увеличаване на производителността', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Не могат да изпълняват повече от една инструкция едновременно', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Какви видове памет използват съвременните компютри?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'ROM', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'EPROM', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'FLASH', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Оперативна памет (RAM)', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Кои от следните характеристики се отнасят до RISC архитектурата?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Има по-малък набор от инструкции', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Поддържа по-висока степен на паралелизъм', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Използва сложни инструкции за изпълнение на операции', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Оптимизирана за висока производителност при изпълнение на прости задачи', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Кои две генерации чипсети съществуват, като едните използват мостова архитектура, а другите - хъбова архитектура?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Мостова и Хъбова архитектура', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Аналогова и Цифрова архитектура', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Статична и Динамична памет', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'USB 2.0 и USB 3.0 архитектура', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Кое от следните твърдения описва характеристиките на PCI Express?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'PCI Express използва аналогов сигнал и е предназначен за предаване на данни по единични канали.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'PCI Express комуникацията е базирана на пакети, протичащи през няколко слоя и използва диференциален интерфейс за по-голяма шумоустойчивост.', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'PCI Express се основава на усукана двойка кабели и е по-податлив на електромагнитни смущения.', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'PCI Express е изцяло оптичен интерфейс, използващ лазерни технологии за предаване на данни.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Каква е функцията на BIOS в компютърната система?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'За зареждане на операционната система', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'За извършване на начално самотестове при стартиране', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'За конфигуриране на хардуерните настройки', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'За управление на файловата система', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Кои от следните компоненти могат да използват DMA за трансфер на данни?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Хард диск', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Видеокарта', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Процесор', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Звукова карта', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Каква е ролята на северния и южния мост в компютърната архитектура?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Управление на външната памет', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Комуникация между различни компоненти на системата', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Съхранение на операционната система', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Зареждане на BIOS', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Каква е функцията на северния мост в чипсета?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Комуникация с процесора', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Управление на периферни устройства', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Комуникация с оперативната памет', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Управление на звуковите функции', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Какви са характеристиките на супер скаларните процесори?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Могат да изпълняват няколко инструкции едновременно', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Работят с една инструкция в един тактов цикъл', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Използват единствено скаларна обработка', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Поддържат паралелизъм на ниво инструкции', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Кои типове памет се използват за съхранение на BIOS?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'FLASH', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'EPROM', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'HDD', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'SSD', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Кои от следните методи се използват за комуникация на периферията с компютъра?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Заявка за прекъсване', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Полинг', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Директен достъп до паметта (DMA)', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Ефективна комуникация', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Какви функции изпълнява контролерът за прекъсвания?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Управление на входно-изходните операции', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Приемане и обработка на заявки за прекъсване от множество източници', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Управление на паметта', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Синхронизиране на операциите на процесора', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Кои са характеристиките на CISC архитектурата?',
                    'answers' => [
                        ['id' => 'a', 'text' => ' Има по-голям набор от инструкции', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Подходяща за задачи с висока степен на сложност', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Използва микропрограмиран подход за изпълнение на инструкциите', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Предпочитана за приложения, изискващи минимален софтуерен натоварване', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Всички посочени', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Кои архитектурни особености допринасят за ефективността на съвременните процесори?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Многонишково изпълнение', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Интегрирана графична ядро', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Поддържане на виртуална памет', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Използване на вградена кеш памет на няколко нива', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Какви методи за освобождаване на кеш редове се използват в кеш паметта?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Least Recently Used (LRU)', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'First-In, First-Out (FIFO)', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Random Replacement', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Least Frequently Used (LFU)', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Коя хъбова архитектура се отнася за Южен мост',
                    'answers' => [
                        ['id' => 'a', 'text' => 'MCH', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'ICH', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Super I/O', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'VLIW ', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Каква е големината на блока (сектора) при работа на хард дисковете, и как операционната система управлява файловете върху тях?',
                    'answers' => [
                        ['id' => 'a', 'text' => '512 байта за старите и 4 КБ за по-новите дискове, като операционната система управлява файлове, а диска работи със сектори', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Винаги 512 байта, без значение от вида на хард диска', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Винаги 4 КБ за всички видове хард дискове', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Размерът на блока е променлив и се определя от операционната система', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Първият процесор с кеш памет',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Интел 486', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Intel 8086', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'AMD Ryzen 7', 'isCorrect' => false],
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

        return $this->render('quiz7/index.html.twig', [
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