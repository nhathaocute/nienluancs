<div class="container pb-3">
    <div class="row">
        <div class="col-12">
            <h2>Gửi thông tin liên hệ cho chúng tôi</h2>
            <p>
                Bạn hãy điền nội dung tin nhắn vào form dưới đây. Chúng tôi sẽ trả
                lời bạn sau khi nhận được
            </p>
        </div>
    </div>
    <form action="/submit-form" method="post">
        <div class="row">
            <div class="col-md-6 form-lienhe">
                <input type="text" id="fullname" name="fullname" required placeholder="Họ và tên:" />

                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required placeholder="Số điện thoại:" />

                <input type="email" id="email" name="email" required placeholder="Email:" />

                <textarea id="address" name="address" required placeholder="Địa chỉ:"></textarea>
            </div>
            <div class="col-md-6 form-lienhe form-lh-right">
                <textarea id="content" name="content" required placeholder="Nội dung:"></textarea>

                <button class="btn btn-primary submit-mess">Gửi tin nhắn</button>
            </div>
        </div>
    </form>
</div>

<div class="w-100">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89514.26054840433!2d105.57074133181563!3d9.758613217959255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0f1d1e88956ef%3A0xef7a6de6658fee0c!2zxJDhuqFpIEjhu41jIEPhuqduIFRoxqEgS2h1IEjDsmEgQW4!5e0!3m2!1svi!2s!4v1678755912728!5m2!1svi!2s"
        width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>