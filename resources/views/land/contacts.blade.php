@php

if(isset($_GET['callback'])) {
    $emailContent = "
        <div style='background: #000;width:fit-content;padding:15px 35px;border-radius:15px;'>
            <table>
                <tr>
                    <td>
                        <img src='https://cygreat.ru/assets/images/logo.svg' width='35px' style='display:inline;'>
                    </td>
                    <td>
                        <h3 style='font-size:17px;color:#ffbf76;font-family:Arial, sans-serif;
                            font-weight:400;margin-bottom:0px;margin-top:5px;margin-left:5px;'>Запрос в тех поддержку</h3>
                    </td>
                </tr>
            </table>
            <h2 style='font-size:17px;color:#fff;font-family:Arial, sans-serif;font-weight:400;'><b>От игрока:</b> {$_GET['fname']}</h2>
            <h2 style='font-size:17px;color:#fff;font-family:Arial, sans-serif;font-weight:400;'><b>ID:</b> {$_GET['lname']}</h2>
            <h2 style='font-size:17px;color:#fff;font-family:Arial, sans-serif;font-weight:400;'><b>Email:</b> {$_GET['email']}</h2>
            <h2 style='font-size:17px;color:#fff;font-family:Arial, sans-serif;font-weight:400;'><b>Тема:</b> {$_GET['problem']}</h2>
            <h2 style='font-size:17px;color:#fff;font-family:Arial, sans-serif;font-weight:400;max-width: 500px;'><b>Текст:</b> {$_GET['message']}</h2>
        </div>
    ";

    // устанавливаем тип сообщения Content-type, если хотим
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8 \r\n";

    // дополнительные данные
    $headers .= "From: {$_GET['fname']} <{$_GET['email']}>\r\n"; // от кого
    $headers .= 'Cc: murad@cygreat.ru' . "\r\n"; // копия сообщения на этот адрес
    $headers .= "Bcc: ahma@cygreat.ru" . "\r\n"; // скрытая копия сообщения на этот

    // Отправляем письмо
    mail('help@cygreat.ru', $_GET['problem'], $emailContent, $headers);

    // Показываем успешное уведомление
    @endphp
        <script>
            alert('Ваше письмо успешно отправлено');
        </script>
    @php

    Redirect::to('/contacts');
}
@endphp

@extends('layouts.land')

@section('content')
    <br><br>
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>Наши контакты</h2>
                    <ul class="with-icon colored">
                        <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                        <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                    </ul>
                    <p>Мы постараемся ответить Вам как можно быстрее. В среднем это занимает не более 2х рабочих дней.</p>
                    <p>Так же, просмотрите <a href="{{ route('faq.index') }}">FAQ раздел</a>. <br>
                        Вероятно, Вы найдёте ответ на свой вопрос.</p>
                </div>
                <div class="col-md-9">
                    <div class="col-12">
                        <h2>Обратная связь</h2>
                    </div>
                    <form action="/contacts" method="GET" class="probootstrap-form mb60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">Имя</label>
                                    <input type="text" class="form-control" id="fname" name="fname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Ваш ID</label>
                                    <input type="text" class="form-control" id="lname" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="theme">Выберите свою проблему</label>
                            <select id="theme" class="form-control" name="problem">
                                <option value="Проблемы со входом">Проблемы со входом</option>
                                <option value="Не поступили средства">Не поступили средства</option>
                                <option value="Жалоба на игрока (ID или имя укажите в комментарии)">Жалоба на игрока (ID или имя укажите в комментарии)</option>
                                <option value="Предложение игры">Предложение игры</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="callback" value="Отправить запрос">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
