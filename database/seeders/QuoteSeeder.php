<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $quotes = array(
            [
                'content' => 'Đừng lo lắng về khó khăn của bạn trong toán học, tôi đảm bảo với bạn rằng những khó khăn toán học của tôi còn gấp bội.',
                'author' => 'Albert Einstein',
                'subject_id' => 1
            ],
            [
                'content' => 'Toán học thuần túy, theo cách của riêng nó, là thi ca của tư duy logic.',
                'author' => 'Albert Einstein',
                'subject_id' => 1
            ],
            [
                'content' => 'Tinh hoa của toán học nằm ở tự do của nó.',
                'author' => 'Georg Cantor',
                'subject_id' => 1
            ],
            [
                'content' => 'Mỗi vấn đề tôi giải quyết trở thành quy luật được sử dụng sau đó để giải quyết các vấn đề khác.',
                'author' => 'Rene Descartes',
                'subject_id' => 1
            ],
            [
                'content' => 'Không có bài toán nào không giải được. Chúng ta phải biết và sẽ biết.',
                'author' => 'David Hilbert',
                'subject_id' => 1
            ],
            [
                'content' => 'Mọi phát kiến của nhân loại đều có bàn tay hướng dẫn của Toán học, bởi vì chúng ta không thể có một người chỉ đường nào khác.',
                'author' => 'Charles Darwin',
                'subject_id' => 1
            ],
            [
                'content' => 'To have another language is to possess a second soul.',
                'author' => 'Charlemagne',
                'subject_id' => 2
            ],
            [
                'content' => 'If you talk to a man in a language he understands, that goes to his head. If you talk to him in his language, that goes to his heart.',
                'author' => 'Nelson Mandela',
                'subject_id' => 2
            ],
            [
                'content' => 'A different language is a different vision of life.',
                'author' => 'Federico Fellini',
                'subject_id' => 2
            ],
            [
                'content' => 'With languages, you are at home anywhere.',
                'author' => 'Edward De Waal',
                'subject_id' => 2
            ],
            [
                'content' => 'Knowledge of languages is the doorway to wisdom.',
                'author' => 'Roger Bacon',
                'subject_id' => 2
            ],
            [
                'content' => 'Language shapes the way we think, and determines what we can think about.',
                'author' => 'Benjamin Lee Whorf',
                'subject_id' => 2
            ],
            [
                'content' => 'Learning another language is like becoming another person.',
                'author' => 'Haruki Murakami',
                'subject_id' => 2
            ],
            [
                'content' => 'Dân ta phải biết sử ta, cho tường gốc tích nước nhà Việt Nam.',
                'author' => 'Chủ tịch Hồ Chí Minh',
                'subject_id' => 3
            ],
            [
                'content' => 'Lịch sử chỉ có thể được viết tốt ở một đất nước tự do.',
                'author' => 'Voltaire',
                'subject_id' => 3
            ],
            [
                'content' => 'Không gì thực sự xảy ra nếu chưa được ghi lại.',
                'author' => 'Virginia Woolf',
                'subject_id' => 3
            ],
            [
                'content' => 'Lịch sử không bao giờ được viết mà không với yêu thương hoặc căm hận.',
                'author' => 'Theodor Mommsen',
                'subject_id' => 3
            ],
            [
                'content' => 'Hãy học lịch sử, hãy học lịch sử. Trong lịch sử có tất cả những bí mật của tài trị quốc.',
                'author' => 'Winston Churchill',
                'subject_id' => 3
            ],
            [
                'content' => 'Con người không học được nhiều lắm từ những bài học của lịch sử. Đó chính là bài học quan trọng nhất trong những bài học của lịch sử.',
                'author' => 'Aldous Huxley',
                'subject_id' => 3
            ],
            [
                'content' => 'Ai cũng phải đi du lịch để học hỏi.',
                'author' => 'Mark Twain',
                'subject_id' => 4
            ],
            [
                'content' => 'Hãy ngắm nhìn thế giới. Điều đó tuyệt vời hơn bất cứ giấc mơ nào.',
                'author' => 'Ray Bradbury',
                'subject_id' => 4
            ],
            [
                'content' => 'Hãy chỉ nhớ những kỷ niệm, và để lại những dấu chân.',
                'author' => 'Chief Seattle',
                'subject_id' => 4
            ],
            [
                'content' => 'Thế giới là một cuốn sách, và ai không đi chỉ đọc được một trang.',
                'author' => 'St. Augustine',
                'subject_id' => 4
            ],
            [
                'content' => 'Không ai nhận ra rằng du lịch đẹp đến nhường nào cho đến khi họ về đến nhà và ngả đầu lên chiếc gối cũ kỹ, thân quen.',
                'author' => 'Lâm Ngữ Đường',
                'subject_id' => 4
            ],
            [
                'content' => 'Kẻ lữ hành giỏi không có lịch trình cố định, và cũng chẳng có ý định cập bến.',
                'author' => 'Lão Tử',
                'subject_id' => 4
            ]
        );

        foreach ($quotes as $quote) {
            $quoteInstance = new Quote();
            $quoteInstance->content = $quote['content'];
            $quoteInstance->author = $quote['author'];
            $quoteInstance->subject_id = $quote['subject_id'];
            $quoteInstance->save();
        }
    }
}
