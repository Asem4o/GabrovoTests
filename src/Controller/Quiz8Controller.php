<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Quiz8Controller extends AbstractController
{
    #[Route('/quiz/ok/8', name: 'quiz8')]
    public function index(Request $request, SessionInterface $session): Response
    {
        $questions =
            [
                [
                    'question' => 'Какви файлови системи за флаш памети съществуват?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'FAT32 и NTFS', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'ext3 и ext4', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'FAT32, exFAT и NTFS', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'FAT32, exFAT, NTFS, ext3, ext4', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво представляват SSD носителите? Какъв тип флаш памет се използва при тях и защо?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'SSD носителите са магнитни дискове, които използват NAND флаш памет за по-бърз достъп до данните.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'SSD (Solid State Drive) носителите са устройства за съхранение на данни, използващи NAND флаш памет заради тяхната бързина, надеждност и ниска консумация на енергия.', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'SSD носителите са оптични устройства, които използват NOR флаш памет за съхранение на големи обеми информация.', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'SSD носителите са външни хард дискове, които използват NOR флаш памет за бърз трансфер на файлове.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'NAND клетките се записват чрез процес наречен тунелно инжектиране, а се изтриват чрез тунелно освобождаване. Какво представляват тези процеси?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Тунелното инжектиране и тунелното освобождаване са методи за физическо преместване на данни между различни устройства.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Тунелното инжектиране е процес, при който данните се записват на магнитен лентов носител, а тунелното освобождаване изтрива тези данни.Тунелното инжектиране е процес, при който данните се записват на магнитен лентов носител, а тунелното освобождаване изтрива тези данни.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Тунелното инжектиране е метод за запис на електрони в плаващия гейт на NAND флаш памет чрез високо напрежение, докато тунелното освобождаване е процес на изтриване на заряда от плаващия гейт, също чрез прилагане на високо напрежение, но в обратна посока.', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Тунелното инжектиране и тунелното освобождаване са процеси, използвани в ядрената физика за управление на ядрени реакции.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],


                [
                    'question' => 'Как можете да анализирате броя на PCI шините в компютърна конфигурация и кои ресурси са заети?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Използване на мултиметър', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Преглед на BIOS настройките', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Използване на софтуер като Everest', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Визуален преглед на дънната платка', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Има ли връзка между такта на системната шина и такта на микропроцесора?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Не, няма никаква връзка между двата такта.', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Да, но само ако микропроцесорът и системната шина са от същия производител.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Да, тактът на системната шина често определя максималния такт, при който микропроцесорът може да работи ефективно.', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Тактът на системната шина влияе само на скоростта на външните устройства, а не на микропроцесора.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Как можете да анализирате нивото на фрагментиране на дяловете на твърд диск?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Използване на командния ред', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Използване на интегрирания в операционната система дефрагментатор', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Използване на външен софтуер за анализ на диска', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Визуален преглед на физическите плочи на диска', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => true,
                ],

                [
                    'question' => 'Кои стъпки следва алгоритъмът за форматиране на нов твърд диск до запис на операционна система?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Сканиране на диска за бад сектори', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Физическо форматиране, разделяне на дялове, логическо форматиране със задаване на размера на блока, инсталиране на операционна система', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Изтриване на всички предишни данни и възстановяване на заводски настройки', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Промяна на скоростта на въртене на диска', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Защо операционната система се записва по подразбиране във най-външния логически дял?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'За по-бърз достъп до данните', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Поради исторически причини', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'За да се максимизира ефективността на диска', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'За да се улесни възстановяването на данни', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Защо операционните системи работят с твърдите дискове на ниво блокове (клъстери), а не на ниво сектори?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'За да оптимизират скоростта на четене и запис', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'За по-лесно управление на големи обеми данни', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Поради ограничения в хардуера', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'За да намалят риска от грешки при четене и запис', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какви са основните предимства на файлова система NTFS при сравнение с FAT32?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'По-голяма максимална големина на файлове и томове', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'По-добра поддръжка на разрешения за достъп', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Поддръжка на сжатие на данни', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Всички изброени', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Защо при интерфейс EIDE лентовият кабел е с 80 проводника, а не с 40 както е при интерфейс IDE?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'За по-добра защита от електромагнитни смущения', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'За да се поддържа по-висока скорост на пренос на данни', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'За да се увеличи максималната дължина на кабела', 'isCorrect' => false],
                        ['id' => 'd', 'text' => ' За да се позволи свързването на повече устройства', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                    'question' => 'Защо такта на синхронизация на RAMBUS е много по-висок от този на SRAM и DDR? Как се постига стабилна работа на тази DRAM при висока тактова честота?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Използването на специални технологии за увеличаване на тактовата честота и подобряване на сигналната целостност.', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Прецизно контролиране на температурата в системата за предотвратяване на прегряване.', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Използване на допълнителни буфери за намаляване на латентността.', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Увеличаване на броя на контактите на паметта за подобряване на пропускателната способност.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво представляват SSD?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Магнитни запомнящи устройства за съхранение на голям обем данни', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Устройства за съхранение на данни, използващи флаш памет, които предлагат по-висока скорост и по-ниска консумация на енергия в сравнение с HDD', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Оптични устройства за съхранение, които използват лазер за четене и запис на информация', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Външни устройства за съхранение, които използват безжична технология за пренос на данни', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Колко нива на кеширане се използват при микропроцесори Itanium и Itanium 2?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Едно ниво на кеширане', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'Две нива на кеширане', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Три нива на кеширане', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Четири нива на кеширане', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Коя кеш памет, L1 или L2, е с по-голямо значение за производителността на една компютърна система?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'L1 кеш паметта, защото е най-близко до процесора и предоставя най-бързия достъп до инструкции и данни', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'L2 кеш паметта, тъй като е по-голяма и може да съхранява повече данни, което намалява нуждата от достъп до по-бавната основна памет', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'И двете са с еднакво значение, тъй като работят заедно за оптимизиране на производителността на системата', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Зависи от специфичната архитектура на процесора и не може да се определи без допълнителна информация', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Какво прави CPU clock',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Проверява дали има зададени заявки към процесора', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Следи за часа на компютъра', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'Изпълнява инструкции за часовника на апаратната част', 'isCorrect' => false],
                        ['id' => 'd', 'text' => 'Разпределя инструкциите между северен и южен мост', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],

                [
                    'question' => 'За какво може да се използва PCIe 1x и за какво - PCIe 16x?',
                    'answers' => [
                        ['id' => 'a', 'text' => 'PCIe 1x - За графични карти; PCIe 16x - За звукови карти', 'isCorrect' => false],
                        ['id' => 'b', 'text' => 'PCIe 1x - За звукови карти; PCIe 16x - За графични карти', 'isCorrect' => false],
                        ['id' => 'c', 'text' => 'PCIe 1x - За мрежови карти, контролери за хранилища и др.; PCIe 16x - За високопроизводителни графични карти', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'PCIe 1x - За високопроизводителни графични карти; PCIe 16x - За мрежови карти, контролери за хранилища и др.', 'isCorrect' => false],
                    ],
                    'multipleCorrect' => false,
                ],
                [
                    'question' => 'Колко вида шини има',
                    'answers' => [
                        ['id' => 'a', 'text' => 'Шина за данни', 'isCorrect' => true],
                        ['id' => 'b', 'text' => 'Адресна шина', 'isCorrect' => true],
                        ['id' => 'c', 'text' => 'Управляваща шина', 'isCorrect' => true],
                        ['id' => 'd', 'text' => 'Захранващи напрежения', 'isCorrect' => true],
                    ],
                    'multipleCorrect' => true,
                ],
                [
                'question' => 'Какво прави bus master',
                'answers' => [
                    ['id' => 'a', 'text' => 'Обменя информация с микропроцесора', 'isCorrect' => true],
                    ['id' => 'b', 'text' => 'Прехвърля информация с адресната памет', 'isCorrect' => false],
                    ['id' => 'c', 'text' => 'Зарежда инструкции към BIOS', 'isCorrect' => false],
                    ['id' => 'd', 'text' => 'Поддържа тактовата честота на видео контролера', 'isCorrect' => false],
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

        return $this->render('quiz8/index.html.twig', [
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