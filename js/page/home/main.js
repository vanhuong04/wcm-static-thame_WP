
// count douwn for time of sale product
function countDownSale() {
    const hour = document.querySelector('.sale__hours-number');
    const minutes = document.querySelector('.sale__minutes-number');
    const seconds = document.querySelector('.sale__secons-number');
    let currentHour = +hour.textContent; // Chuyển đổi giá trị thành số
    let currentMinutes = +minutes.textContent; // Chuyển đổi giá trị thành số
    let currentSeconds = +seconds.textContent; // Chuyển đổi giá trị thành số

    let intervalId; // Khai báo biến để lưu trữ ID của setInterval

    intervalId = setInterval(() => {
        currentSeconds -= 1; // Cập nhật giá trị current
        seconds.textContent = currentSeconds; // Hiển thị giá trị mới

        if (currentSeconds <= 0) {
            currentSeconds = 60
            if (currentHour === 0 && currentSeconds === 0) {
                currentSeconds = 0
            }
            currentMinutes -= 1; // Cập nhật giá trị current
            minutes.textContent = currentMinutes; // Hiển thị giá trị mới

        }

        if (currentMinutes <= 0) {
            currentMinutes = 60
            if (currentHour === 0) {
                currentMinutes = 0
            }
            currentHour -= 1; // Cập nhật giá trị current
            hour.textContent = currentHour;

        }

        if (currentHour <= 0) {
            seconds.textContent = 0
            minutes.textContent = 0
            hour.textContent = 0
            clearInterval(intervalId)
        }
    }, 1000);


}

countDownSale();
