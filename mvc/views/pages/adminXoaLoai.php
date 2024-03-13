<style>
.group-xoa {
    background: #f4f6f8;
    border: 1px solid #dfe3e8;
    border-radius: 5px;
    color: #212b36;
    margin-bottom: 5%;
    padding: 30px;
    text-align: center;
}

.btn-xoa {
    box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.15);
    background-color: #67ccc3;
}

.btn-huy {
    box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.15);
    background-color: #fb758e;
}

.btn-huy:hover {
    background-color: #e27271;
}

.btn-xoa:hover {
    background-color: #28a2a0;

}

.button-xoa:hover {
    box-shadow: 0 5px 25px 0 rgba(0, 0, 0, 0.25);
}

.button-xoa {
    display: inline-block;
    padding: 1em 1.8125em;
    border-radius: 4px;
    font-family: ShopifySans, Helvetica, Arial, sans-serif;
    font-weight: 700;
    font-size: 1em;
    line-height: 1.133;
    transition: 150ms ease;
    transition-property: background-color, border-color, box-shadow, color;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    cursor: pointer;
    box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.15);

    color: #ffffff;
    border-width: 1px;
    border-style: solid;
    border-color: transparent;
}

.box-btn {
    display: flex;
    justify-content: center;
    gap: 20px;
}
</style>
<div class="container group-xoa">

    <h1>bạn có chắc muốn xóa?</h1>
    <div class="box-btn">

        <form method="post">
            <button type="submit" class="button-xoa btn-xoa">Xóa</button>
        </form>
        <a href="/nienluanCNTT/admin"><button class="button-xoa btn-huy">Hủy</button></a>
    </div>
</div>