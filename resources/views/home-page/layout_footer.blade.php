<footer>

    <div class="container">
        <div class="footer-left">
            <div>
                <img src="https://demerite.com.vn/thumbs/222x42x2/upload/photo/logo-footer-2891.png" alt="">

            </div>
            <div>
                <span>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và và cản
                    trở việc tập trung vào yếu tố trình bày văn bản</span>
            </div>
            <div class="social">
                <a href="#">
                    <div class="social-item">
                        <i class="bi bi-facebook"></i>
                    </div>
                </a>

                <a href="#">
                    <div class="social-item">
                        <i class="bi bi-twitter"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="social-item">
                        <i class="bi bi-youtube"></i>
                    </div>
                </a> <a href="#">
                    <div class="social-item">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="footer-center">
            <div>
                <h3>CONTACT</h3>
            </div>
            <div>
                <b style="white-space: nowrap;"><i class="bi bi-house"></i> Địa Chỉ:</b>
                <span>Số 29 đường số 3, KDC Vĩnh Lộc, P. Bình Hưng Hòa, Q. Bình Tân, Tp. HCM </span>
            </div>
            <div>

                <b><i class="bi bi-telephone-inbound"></i> Hotline: </b>
                <span>0919 797 626 - 0898 800 088</span>
            </div>
            <div>
                <b><i class="bi bi-envelope-at"></i> Email: </b>
                <span>demerite@gmail.com</span>
            </div>
            <div>
                <b><i class="bi bi-globe"></i> Website: </b>
                <span>demerite.com.vn</span>
            </div>
        </div>

        <div class="footer-right">
            <div>
                <h3>FANPAGE</h3>
            </div>
            <div class="fanpage_img">
                <img src="{{ asset('image/img_fanpage.png') }}" alt="">
            </div>
        </div>

    </div>


</footer>

<script>
     function submitOnEnter(event) {
      if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("searchForm").submit();
      }
    }
</script>