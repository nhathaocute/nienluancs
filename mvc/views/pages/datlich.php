<style>
.date-input {
    border: 2px solid #0896e9;
    border-radius: 7px;
    background-color: #0896e9;
    color: #fff;
    padding: 5px 10px;
}

.background-themsp1 {
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 26px 0 rgba(10, 1, 73, 0.12);
    width: auto;
}

.form-dl {
    gap: 10px;
}

.group-input-dl {
    display: flex;
    flex-direction: column;
}

.btn-dl {
    font-size: 13px;
    padding: 6px 30px;
    box-shadow: 0 0 26px 0 rgba(10, 1, 73, 0.12);
}
</style>
<div class="container background-themsp1">
    <h1 class="title-add-product w-100 text-center ml-0">
        Đặt Lịch Xem Bất Động Sản
    </h1>

    <marquee>vui lòng chọn đúng ngày giờ để xem bất động sản và liên hệ SDT: 0945477411 để được duyệt, xin cảm ơn!
    </marquee>
    <form method="post">
        <div class="row form-dl">
            <div class="col-12 d-flex justify-content-center">
                <div class="group-input-dl">

                    <label for="date-input">Chọn ngày:</label>
                    <input name="ngayDat" class="date-input" type="date" id="date-input" required>
                    <label for="time-input">Chọn giờ:</label>
                    <select name="gioDat" class="date-input" required>
                        <option value="">-- Chọn thời gian đặt lịch --</option>
                        <option>7h - 9h</option>
                        <option>9h - 11h</option>
                        <option>13h - 15h</option>
                        <option>15h - 17h</option>
                    </select>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">

                <button type="submit" class="btn btn-primary mb-4 btn-dl">Đặt</button>
            </div>
        </div>

    </form>
</div>
<script>
const dateInput = document.getElementById("date-input");

const selectedDate = dateInput.value; // Giá trị của input ngày, ví dụ "2023-05-14"
</script>