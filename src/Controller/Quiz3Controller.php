<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Quiz3Controller extends AbstractController
{
    #[Route('/quiz/ok/3', name: 'quiz3')]
    public function index(Request $request, SessionInterface $session): Response
    {
        $questions = [
            [
                'question' => 'Каква е значимостта на процесора 8086 за развитието на микропроцесорите на Intel?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Първият 16-битов процесор', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Първият процесор с интегрирана графична карта', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Първият процесор с поддръжка на 64-битова архитектура', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Първият процесор използващ технологията Hyper-Threading', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],

            [
                'question' => 'Опишете прехода от 32-битова към 64-битова архитектура при процесорите на Intel. Как това повлиява на възможностите за изчисление?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Увеличаване на скоростта на обработка на данни', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Подобрение на графичното представяне', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Намаление на енергопотреблението', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Увеличение на максималния обем оперативна памет, който може да бъде адресиран', 'isCorrect' => true],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Сравнете процесорите Core i7 и Core i9. Какви подобрения предлага Core i9 спрямо своите предшественици?',
                'answers' => [
                    ['id' => 'a', 'text' => 'По-добра енергоефективност', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'По-висока тактова честота', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Повече ядра и нишки', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Подобрена технология за охлаждане', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е основната разлика между CISC и RISC архитектурите??',
                'answers' => [
                    ['id' => 'a', 'text' => 'CISC използва по-малък брой, но по-сложни инструкции, докато RISC използва по-голям брой, но по-прости инструкции', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'CISC поддържа по-голям брой програмни езици', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'RISC е с по-висока цена на производство', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'CISC процесорите са предназначени изключително за мобилни устройства', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какви са предимствата на супер-скаларната архитектура?',
                'answers' => [
                    ['id' => 'a', 'text' => 'По-ниско енергопотребление', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Възможност за изпълнение на множество инструкции едновременно', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'По-лесно програмиране', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'По-ниска производствена цена', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'В какъв режим работят хард дисковете?',
                'answers' => [
                    ['id' => 'a', 'text' => ' Последователен режим', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Блоков режим', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Паралелен режим', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Смесен режим', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е основната разлика между шините PCI и PCI-e??',
                'answers' => [
                    ['id' => 'a', 'text' => 'PCI-e поддържа по-висока скорост на данните', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'PCI е по-нова технология', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'PCI поддържа по-голямо разстояние между устройствата', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'PCI-e изисква по-малко енергия', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво представлява скаларната архитектура?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Архитектура, която обработва единици данни последователно', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Архитектура, която използва множество процесори за паралелна обработка на данни', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Архитектура, базирана на високоскоростна оперативна памет', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Тип памет, използвана в микропроцесорите', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е характеристиката на RISC архитектурата?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Използва комплексни инструкции', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Оптимизирана за висока производителност с по-прости инструкции', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Поддържа малък брой програмни инструкции', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Фокусирана върху многонишкова обработка', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво е предназначението на чипсетите в компютъра?',
                'answers' => [
                    ['id' => 'a', 'text' => 'За управление на външни устройства', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'За ускоряване на графиката', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'За управление на комуникацията между процесора и останалите компоненти', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'За подобряване на аудио качеството', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво е PCI Express и как се различава от PCI?',
                'answers' => [
                    ['id' => 'a', 'text' => 'По-стар стандарт за свързване на устройства', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Нова версия на PCI с по-висока скорост на данните', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Технология за безжична комуникация', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Вид оперативна памет', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е функцията на кеш паметта в микропроцесора?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Ускоряване на достъпа до данни от хард диска', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Съхранение на временни файлове от операционната система', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Намаляване на времето за достъп до често използваните инструкции и данни', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Управление на външни устройства като принтери и скенери', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какви са предимствата на DDR4 спрямо DDR3 паметта?',
                'answers' => [
                    ['id' => 'a', 'text' => 'По-ниска тактова честота', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'По-висока скорост и ефективност', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'По-ниска производствена стойност', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'По-малък размер на чиповете', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => '"Какво означава терминът суперскаларна архитектура?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Архитектура, която поддържа еднопоточна обработка', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Процесорна архитектура, която може да изпълнява множество инструкции едновременно', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Архитектура, базирана на използването на единствен процесор', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Система за управление на бази данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Каква е ролята на системните шини в компютъра?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Трансфер на електроенергия към компонентите', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Комуникация между различните компоненти на компютъра', 'isCorrect' => true],
                    ['id' => 'c', 'text' => 'Хладене на компютърните компоненти', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Съхранение на данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво представлява технологията Hyper-Threading?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Технология за графично проектиране', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Метод за ускоряване на интернет връзката', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Технология на Intel, позволяваща на едно CPU ядро да изпълнява няколко нишки едновременно', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Система за управление на оперативната памет', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Кога започва да се използват чипсети с цел управление на обмена по системната шина?',
                'answers' => [
                    ['id' => 'a', 'text' => 'С началото на 1990-те години', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'С началото на 1980-те години', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'С началото на 2000-те години', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'С началото на 1970-те години', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Коя е последната версия на шина AGP? Какви са нейните основни параметри?',
                'answers' => [
                    ['id' => 'a', 'text' => 'AGP 1.0, с максимална пропускливост от 266 MB/s', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'AGP 2.0, с максимална пропускливост от 533 MB/s', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'AGP 3.0, с максимална пропускливост от 2.1 GB/s', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'AGP 3.0, с максимална пропускливост от 2.1 GB/s и поддръжка на Direct Memory Access (DMA)', 'isCorrect' => true],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво означава една шина да е от споделен тип? Защо тези шини вече не се използват?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Шината споделя ресурси с други устройства; Те не се използват заради ограничената им производителност и скорост.', 'isCorrect' => false],
                    ['id' => 'b', 'text' => 'Шината е налична за споделено ползване от различни компютърни системи; Не се използват заради заместването им с по-модерни и ефективни технологии.', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Шината се използва от няколко устройства за предаване на данни; Вече не се използват, защото не могат да отговорят на нуждите на съвременните приложения.', 'isCorrect' => true],
                    ['id' => 'd', 'text' => 'Шината е отворена за достъп на различни типове данни; Те не се използват, защото са несигурни и лесно уязвими.', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какъв тип шина е PCI-Express?',
                'answers' => [
                    ['id' => 'a', 'text' => 'Point to point', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Споделен тип', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Звезда', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Динамично пренасяне на данни', 'isCorrect' => false],
                ],
                'multipleCorrect' => false,
            ],
            [
                'question' => 'Какво прави шината за данни',
                'answers' => [
                    ['id' => 'a', 'text' => 'реализира двупосочен обмен на данни', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'реализира еднопосочен обмен на данни', 'isCorrect' => false],
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

        return $this->render('quiz3/index.html.twig', [
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