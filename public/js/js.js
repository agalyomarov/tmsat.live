$(document).ready(function() {
    const reverse = (s) => {
        function rev(s, len, o) {
            return len === 0 ? o : rev(s, --len, (o += s[len]));
        }
        return rev(s, s.length, "");
    };
    const dateConverter = (date) => {
        let datearray = date.split(".");
        return datearray[1] + "." + datearray[0] + "." + datearray[2];
    };
    const dateChange = (date, m) => {
        let datearray = date.split(".");
        return (
            datearray[0] +
            "." +
            parseInt(datearray[1]) +
            parseInt(m) +
            "." +
            datearray[2]
        );
    };
    $(".open_mob_menu").on("click", function() {
        $(this).toggleClass("active");
        $("header .row").toggleClass("active");
        $(".form_profile").toggleClass("hide");
        return false;
    });

    $(".main_pay_balance .pay_pay").on("click", function() {
        $(this).addClass("active");
        $(".main_pay_balance .transfer_pay").removeClass("active");
        $(".main_pay_balance .history_pay").removeClass("active");
        $(".main_pay_balance .pay_pay_item").removeClass("hide");
        $(".main_pay_balance .transfer_pay_item").addClass("hide");
        $(".main_pay_balance .history_pay_item").addClass("hide");
        return false;
    });

    $(".main_pay_balance .transfer_pay").on("click", function() {
        $(this).addClass("active");
        $(".main_pay_balance .pay_pay").removeClass("active");
        $(".main_pay_balance .history_pay").removeClass("active");
        $(".main_pay_balance .transfer_pay_item").removeClass("hide");
        $(".main_pay_balance .pay_pay_item").addClass("hide");
        $(".main_pay_balance .history_pay_item").addClass("hide");
        return false;
    });

    $(".main_pay_balance .history_pay").on("click", function() {
        $(this).addClass("active");
        $(".main_pay_balance .pay_pay").removeClass("active");
        $(".main_pay_balance .transfer_pay").removeClass("active");
        $(".main_pay_balance .history_pay_item").removeClass("hide");
        $(".main_pay_balance .pay_pay_item").addClass("hide");
        $(".main_pay_balance .transfer_pay_item").addClass("hide");
        return false;
    });

    $(".form_enter .tab_enter .reg").on("click", function() {
        $(".form_enter .enter_enter").addClass("hide");
        $(".form_enter .reg_reg").removeClass("hide");
        $(".form_enter .tab_enter .reg").addClass("active");
        $(".form_enter .tab_enter .enter").removeClass("active");
        return false;
    });
    $(".form_enter .tab_enter .enter").on("click", function() {
        $(".form_enter .reg_reg").addClass("hide");
        $(".form_enter .enter_enter").removeClass("hide");
        $(".form_enter .tab_enter .enter").addClass("active");
        $(".form_enter .tab_enter .reg").removeClass("active");
        return false;
    });

    $(".home .search_user .add_btn").on("click", function() {
        const formEditUser = document.querySelector(".profile_edit form");
        formEditUser.querySelector("input[name='login']").value = "";
        formEditUser.querySelector("input[name='password']").value = "";
        formEditUser.querySelector("textarea[name='notice']").value = "";
        $(".profile_edit, html, body, .black_fon").addClass("active");
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });

    $(".black_fon").on("click", function() {
        $(".profile_edit, html, body, .black_fon").removeClass("active");
        return false;
    });

    $(".profile_edit .cansel").on("click", function() {
        $(".profile_edit, html, body, .black_fon").removeClass("active");
        const formEditUser = document.querySelector(".profile_edit form");
        formEditUser.querySelector("input[name='login']").value = "";
        formEditUser.querySelector("input[name='password']").value = "";
        formEditUser.querySelector("textarea[name='notice']").value = "";
        return false;
    });

    $(".top_scroll").on("click", function() {
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $("header").addClass("scroll");
        } else {
            $("header").removeClass("scroll");
        }
    });

    $(".all_user .item .list_btn").on("click", function() {
        $(this).parent().toggleClass("active");
        $(document).mouseup(function(e) {
            var container = $(".all_user .item");
            if (container.has(e.target).length === 0) {
                $(".all_user .item").removeClass("active");
            }
        });
        return false;
    });

    const start_data_packet = document.querySelector("input#start");
    const end_data_packet = document.querySelector("input#end");
    if (start_data_packet) {
        new Datepicker(start_data_packet, {
            format: {
                toValue(date, format, locale) {},
                toDisplay(date, format, locale) {
                    return new Date(date).toLocaleDateString();
                },
            },
        });
    }
    if (end_data_packet) {
        new Datepicker(end_data_packet, {
            format: {
                toValue(date, format, locale) {},
                toDisplay(date, format, locale) {
                    return new Date(date).toLocaleDateString();
                },
            },
        });
    }
    if (start_data_packet) {
        start_data_packet.value = new Date().toLocaleDateString();
    }
    if (end_data_packet) {
        end_data_packet.value = new Date(
            Date.now() + 2592000000
        ).toLocaleDateString();
    }
    const BlockProfileEdit = document.querySelector(".main_all_user");
    if (BlockProfileEdit) {
        BlockProfileEdit.addEventListener("click", (e) => {
            if (e.target.classList.contains("diller_edit_user")) {
                fetch(`/diller/user/${e.target.dataset.login}/get`)
                    .then((response) => {
                        return response.json();
                    })
                    .then((data) => {
                        const formEditUser =
                            document.querySelector(".profile_edit form");
                        formEditUser.querySelector(
                            "input[name='login']"
                        ).value = data.user.login;
                        formEditUser.querySelector(
                            "input[name='password']"
                        ).value = data.user.password;
                        formEditUser.querySelector(
                            "textarea[name='notice']"
                        ).value = data.user.notice;
                        formEditUser.querySelector("input[name='btn']").value =
                            "Изменить";
                        document.querySelector("html").classList.add("active");
                        document.querySelector("body").classList.add("active");
                        document
                            .querySelector(".profile_edit")
                            .classList.add("active");
                        document
                            .querySelector(".black_fon")
                            .classList.add("active");
                        $("html, body").animate({ scrollTop: 0 }, 500);
                    });
            }
        });
    }
    const buyPacketForUser = document.querySelector(
        ".main_pay .buy_packet_for_user"
    );

    if (buyPacketForUser) {
        buyPacketForUser.addEventListener("click", (e) => {
            const selectPackets = document.querySelectorAll(
                ".main_pay .select_packets"
            );
            selectPackets.forEach((packet, key, parent) => {
                if (packet.checked) {
                    console.log(packet);
                }
            });
        });
    }

    let balanceProfile = document.querySelector(".balance_profile span.sum");
    if (balanceProfile) {
        balanceProfile = balanceProfile.textContent;
    }

    const eventSelectPacket = document.querySelector(".all_pay_table");
    const dataSelectPackets = document.querySelector(
        ".main_pay .data_select_packets"
    );
    if (eventSelectPacket) {
        eventSelectPacket.addEventListener("click", (e) => {
            if (e.target.classList.contains("select_packets")) {
                let price = 0;
                const selectPackets = document.querySelectorAll(
                    ".main_pay .select_packets"
                );
                selectPackets.forEach((packet, key, parent) => {
                    if (packet.checked) {
                        price += parseFloat(packet.dataset.price);
                    }
                });
                if (price > 0) {
                    let start = Math.floor(
                        Date.parse(dateConverter(start_data_packet.value)) /
                        1000
                    );
                    let end = Math.floor(
                        Date.parse(dateConverter(end_data_packet.value)) / 1000
                    );
                    if (start > end || !start || !end) {
                        dataSelectPackets.innerHTML = "Выберите правилную дату";
                    } else {
                        let month = 2592000;
                        let diff = end - start;
                        let currentPrice = ((price * diff) / month).toFixed(2);
                        dataSelectPackets.innerHTML = `Общая стоимость: ${currentPrice} $ Ваш баланс: ${balanceProfile} $ | <a  href='/pay_balance'>Пополнить</a>`;
                    }
                } else {
                    dataSelectPackets.innerHTML =
                        "У вас пока нет выбранных пакетов...";
                }
            }
        });
    }

    const selectDateForMonth = document.querySelector(
        ".main_pay .select_data_for_month"
    );
    if (selectDateForMonth) {
        selectDateForMonth.addEventListener("change", (e) => {
            let price = 0;
            let newDate = new Date();
            end_data_packet.value = new Date(
                newDate.getFullYear(),
                newDate.getMonth() + parseInt(e.target.value),
                newDate.getDate()
            ).toLocaleDateString();
            const selectPackets = document.querySelectorAll(
                ".main_pay .select_packets"
            );
            selectPackets.forEach((packet, key, parent) => {
                if (packet.checked) {
                    price += parseFloat(packet.dataset.price);
                }
            });
            let start = Math.floor(
                Date.parse(dateConverter(start_data_packet.value)) / 1000
            );
            let end = Math.floor(
                Date.parse(dateConverter(end_data_packet.value)) / 1000
            );
            if (start > end || !start || !end) {
                dataSelectPackets.innerHTML = "Выберите правилную дату";
            } else {
                if (price > 0) {
                    let month = 2592000;
                    let diff = end - start;
                    let currentPrice = ((price * diff) / month).toFixed(2);
                    dataSelectPackets.innerHTML = `Общая стоимость: ${currentPrice} $ Ваш баланс: ${balanceProfile} $ | <a  href='/pay_balance'>Пополнить</a>`;
                } else {
                    dataSelectPackets.innerHTML =
                        "У вас пока нет выбранных пакетов...";
                }
            }
        });
    }

    const slider = $(".sliderHome");
    if (slider) {
        $(".sliderHome").slick({
            infinite: true,
            autoplay: true,
            dots: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }
});