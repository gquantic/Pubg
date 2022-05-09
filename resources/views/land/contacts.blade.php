@extends('layouts.land')


@section('content')
    <br><br>
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
{{--                    <h2>Обратная связь</h2>--}}
                </div>
                <div class="col-md-8">
                    <form action="#" method="post" class="probootstrap-form mb60">
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
                            <select id="theme" class="form-control">
                                <option value="">Проблемы со входом</option>
                                <option value="1">Не поступили средства</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-md-push-1">
                    <h4>Наши контакты</h4>
                    <ul class="with-icon colored">
                        <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                        <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                    </ul>

                    <h4>Обратная связь</h4>
                    <p>Мы постараемся ответить Вам как можно быстрее. В среднем это занимает не более 2х рабочих дней.</p>
                    <p>Так же, просмотрите <a href="{{ route('faq.index') }}">FAQ раздел</a>. <br>
                            Вероятно, Вы найдёте ответ на свой вопрос.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
