<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xoan Store</title>
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- link slide -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
  </head>
  <body>
    <!-- section header starts -->
    <header class="header">
      <div class="logo">
        <!-- logo -->
        <p>XOAN store</p>
        <div class="icons">
          <svg
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g id="Outline / Search / Magnifer">
              <path
                id="Vector"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.58342 2.29166C5.55634 2.29166 2.29175 5.55625 2.29175 9.58332C2.29175 13.6104 5.55634 16.875 9.58342 16.875C13.6105 16.875 16.8751 13.6104 16.8751 9.58332C16.8751 5.55625 13.6105 2.29166 9.58342 2.29166ZM1.04175 9.58332C1.04175 4.86589 4.86598 1.04166 9.58342 1.04166C14.3008 1.04166 18.1251 4.86589 18.1251 9.58332C18.1251 11.7171 17.3427 13.6681 16.0491 15.1652L18.7754 17.8914C19.0194 18.1355 19.0194 18.5312 18.7754 18.7753C18.5313 19.0193 18.1356 19.0193 17.8915 18.7753L15.1653 16.049C13.6682 17.3426 11.7172 18.125 9.58342 18.125C4.86598 18.125 1.04175 14.3008 1.04175 9.58332Z"
                fill="#434344"
              />
            </g>
          </svg>

          <svg
            width="20"
            height="22"
            viewBox="0 0 20 22"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g id="user">
              <g id="Vector">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.9999 5.66405C13.9999 7.87194 12.2093 9.66144 9.99992 9.66144C7.79059 9.66144 5.99992 7.87194 5.99992 5.66405C5.99992 3.45616 7.79059 1.66666 9.99992 1.66666C12.2093 1.66666 13.9999 3.45616 13.9999 5.66405Z"
                  stroke="#434344"
                  stroke-width="1.5"
                  stroke-linecap="square"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M16.6666 20.3212H3.33325C3.33325 19.3744 3.33325 18.4738 3.33325 17.6582C3.33325 15.449 5.12411 13.6588 7.33325 13.6588H12.6666C14.8757 13.6588 16.6666 15.449 16.6666 17.6582C16.6666 18.4738 16.6666 19.3744 16.6666 20.3212Z"
                  stroke="#434344"
                  stroke-width="1.5"
                  stroke-linecap="square"
                />
              </g>
            </g>
          </svg>

          <a href="/cart.html">
            <svg
              width="20"
              height="22"
              viewBox="0 0 20 22"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="bag">
                <path
                  id="Vector"
                  d="M6.00005 6.33332V5.66666C6.00005 3.45752 7.79092 1.66666 10.0001 1.66666C12.2092 1.66666 14.0001 3.45752 14.0001 5.66666V6.33332M3.2016 9.51941L2.16456 18.8527C2.07681 19.6426 2.69506 20.3333 3.48974 20.3333H16.5104C17.3051 20.3333 17.9233 19.6426 17.8355 18.8527L16.7985 9.51941C16.7235 8.84417 16.1527 8.33332 15.4733 8.33332H4.52678C3.84738 8.33332 3.27663 8.84417 3.2016 9.51941Z"
                  stroke="#434344"
                  stroke-width="1.5"
                />
              </g>
            </svg>
          </a>
        </div>
      </div>

      <nav class="navbar">
        <a href="index.html" class="animation-tag-a">trang chủ</a>

        <div class="dropdown" style="position: relative">
          <a style="color: inherit" href="#"
            >sản phẩm
            <svg
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="vuesax/linear/arrow-down">
                <g id="arrow-down">
                  <path
                    id="Vector"
                    d="M13.28 5.96667L8.9333 10.3133C8.41997 10.8267 7.57997 10.8267 7.06664 10.3133L2.71997 5.96667"
                    stroke="#434344"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </g>
              </g>
            </svg>
            <div class="content-dropdown">
              <a class="animation-tag-a" href="/detailProduct.html">Giỏ hoa</a>
              <a class="animation-tag-a" href="/detailProduct.html"
                >Giỏ quà tết</a
              >
              <a class="animation-tag-a" href="/detailProduct.html">Giỏ rượu</a>
            </div>
          </a>
        </div>

        <a href="product.html" class="animation-tag-a">danh mục </a>
        <a href="product-price.html" class="animation-tag-a">Báo giá</a>
        <a href="news.html" class="animation-tag-a">tin tức</a>
        <a href="contact.html" class="animation-tag-a">liên hệ</a>
      </nav>

      <div class="banner">
        <div class="slider-wrapper">
          <div class="slide current-slide">
            <img src="img/banner.png" alt="" />
          </div>

          <div class="slide">
            <img src="img/banner.png" alt="" />
          </div>

          <div class="slide">
            <img src="img/banner.png" alt="" />
          </div>
        </div>

        <div class="arrow">
          <svg
            class="left"
            style="width: 36px; padding: 7px"
            viewBox="0 0 100 100"
          >
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
          </svg>
          <svg
            class="right"
            style="width: 36px; padding: 7px"
            viewBox="0 0 100 100"
          >
            <path
              d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
              transform="translate(100, 100) rotate(180) "
            ></path>
          </svg>
        </div>

        <div class="button-banner">
          <div>
            <button class="first">First</button>
            <button class="last">Last</button>
            <button>Start</button>
            <button>Stop</button>
          </div>
        </div>
      </div>

  

      <!-- <div class="banner">
        <div class="swiper banner-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="box">
                <img src="img/banner.png" alt="" />
              </div>
            </div>

            <div class="swiper-slide">
              <div class="box">
                <img src="img/banner.png" alt="" />
              </div>
            </div>

            <div class="swiper-slide">
              <div class="box">
                <img src="img/banner.png" alt="" />
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div> -->

      <div class="notice">
        <div class="box">
          <img src="img/safe.png" alt="" />
          <p>an toàn</p>
        </div>
        <div class="box">
          <img src="img/quality.png" alt="" />
          <p>chất lượng</p>
        </div>
        <div class="box">
          <img src="img/super.png" alt="" />
          <p>vượt trội</p>
        </div>
        <div class="box">
          <img src="img/fast.png" alt="" />
          <p>nhanh chóng</p>
        </div>
      </div>
    </header>
    <!-- section header ends -->

    <!-- section about starts -->
    <section class="about">
      <div class="container">
        <h2>Giới thiệu</h2>
        <h3>Về XOAN Store</h3>

        <div class="content">
          <p style="margin-bottom: 1rem">
            Xuân sang, Tết đến,... Làm sao thiếu được những món đồ Tết mang đậm
            bản sắc dân tộc? Tại XOAN Store, chúng tôi cung cấp đa dạng các mặt
            hàng đồ Tết, từ bánh chưng, bánh tét, dưa hành, câu đối đỏ, mâm ngũ
            quả,... đến các loại quà tặng Tết ý nghĩa, phù hợp với mọi nhu cầu
            của quý khách hàng.
          </p>

          <p>
            Với đội ngũ nhân viên nhiệt tình, chuyên nghiệp, chúng tôi cam kết
            mang đến cho quý khách hàng những sản phẩm chất lượng tốt nhất, giá
            cả phải chăng và dịch vụ giao hàng tận nơi nhanh chóng.
          </p>
        </div>
        <a href="#" class="btn">Tìm kiểu thêm</a>
      </div>

      <div class="image">
        <img style="border-radius: 5px" src="img/about.png" alt="" />
      </div>
    </section>

    <!-- section about ends -->

    <!-- section best seller starts -->
    <section class="best-seller">
      <h1 class="heading">Sản phẩm bán chạy</h1>

      <nav class="navigation">
        <a href="#" class="animation-tag-a">Giỏ quà tết</a>
        <a href="#" class="animation-tag-a">Rượu tết</a>
        <a href="#" class="animation-tag-a">Hộp quà tết</a>
      </nav>

      <!-- container -->
      <div class="list-product">
        <div class="swiper product-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="container">
                <div class="box">
                  <div class="image">
                    <img src="img/best-1.png" alt="" />
                  </div>
                  <h2>giỏ kẹo mùa xuân</h2>
                  <p class="content">
                    Ngoài giỏ quà Tết truyền thống, hiện nay còn có nhiều loại
                    giỏ quà Tết độc đáo, mang phong cách hiện
                  </p>

                  <p class="cost">750.000đ</p>

                  <div class="button">
                    <a href="/detailProduct.html" class="detail">Chi tiết</a>
                    <a href="#" class="cart">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Buy">
                          <path
                            id="Buy_2"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.3575 0.929465L1.23914 0.917087C0.808429 0.901342 0.421637 1.20593 0.346091 1.64242L0.333713 1.76078C0.317968 2.19149 0.62256 2.57828 1.05905 2.65383L2.81956 2.95831L3.88651 15.67L3.90859 15.861C4.12325 17.3106 5.37001 18.4003 6.85494 18.4003H19.5856L19.7773 18.3942C21.1731 18.3051 22.3303 17.2496 22.534 15.8474L23.6413 8.19596L23.6604 8.02021C23.7623 6.62129 22.654 5.40715 21.2271 5.40715H4.78072L4.50687 2.13846L4.48623 2.00913C4.40638 1.67276 4.13294 1.40983 3.78416 1.34947L1.3575 0.929465ZM6.71968 16.643C6.14186 16.5797 5.67976 16.1157 5.63041 15.5241L4.92772 7.15715H21.2271L21.3299 7.16471C21.6983 7.21947 21.9644 7.56396 21.9093 7.9454L20.8021 15.5963L20.7744 15.7331C20.6339 16.2681 20.1493 16.6503 19.5856 16.6503H6.85494L6.71968 16.643ZM4.89307 22.0162C4.89307 21.0407 5.68369 20.2487 6.65941 20.2487C7.63499 20.2487 8.42691 21.0406 8.42691 22.0162C8.42691 22.9919 7.63486 23.7825 6.65941 23.7825C5.68382 23.7825 4.89307 22.9917 4.89307 22.0162ZM18.0197 22.0162C18.0197 21.0406 18.8116 20.2487 19.7872 20.2487C20.7628 20.2487 21.5547 21.0406 21.5547 22.0162C21.5547 22.9919 20.7627 23.7825 19.7872 23.7825C18.8118 23.7825 18.0197 22.9919 18.0197 22.0162ZM18.5899 10.5941C18.5899 10.1109 18.1981 9.71915 17.7149 9.71915H14.4797L14.361 9.72713C13.9339 9.78507 13.6047 10.1512 13.6047 10.5941C13.6047 11.0774 13.9964 11.4691 14.4797 11.4691H17.7149L17.8336 11.4612C18.2607 11.4032 18.5899 11.0371 18.5899 10.5941Z"
                            fill="#A50413"
                          />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="box">
                  <div class="image">
                    <img src="img/best-2.png" alt="" />
                  </div>
                  <h2>Giỏ quà wine</h2>
                  <p class="content">
                    Ngoài giỏ quà Tết truyền thống, hiện nay còn có nhiều loại
                    giỏ quà Tết độc đáo, mang phong cách hiện
                  </p>

                  <p class="cost">750.000đ</p>

                  <div class="button">
                    <a href="/detailProduct.html" class="detail">Chi tiết</a>
                    <a href="#" class="cart">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Buy">
                          <path
                            id="Buy_2"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.3575 0.929465L1.23914 0.917087C0.808429 0.901342 0.421637 1.20593 0.346091 1.64242L0.333713 1.76078C0.317968 2.19149 0.62256 2.57828 1.05905 2.65383L2.81956 2.95831L3.88651 15.67L3.90859 15.861C4.12325 17.3106 5.37001 18.4003 6.85494 18.4003H19.5856L19.7773 18.3942C21.1731 18.3051 22.3303 17.2496 22.534 15.8474L23.6413 8.19596L23.6604 8.02021C23.7623 6.62129 22.654 5.40715 21.2271 5.40715H4.78072L4.50687 2.13846L4.48623 2.00913C4.40638 1.67276 4.13294 1.40983 3.78416 1.34947L1.3575 0.929465ZM6.71968 16.643C6.14186 16.5797 5.67976 16.1157 5.63041 15.5241L4.92772 7.15715H21.2271L21.3299 7.16471C21.6983 7.21947 21.9644 7.56396 21.9093 7.9454L20.8021 15.5963L20.7744 15.7331C20.6339 16.2681 20.1493 16.6503 19.5856 16.6503H6.85494L6.71968 16.643ZM4.89307 22.0162C4.89307 21.0407 5.68369 20.2487 6.65941 20.2487C7.63499 20.2487 8.42691 21.0406 8.42691 22.0162C8.42691 22.9919 7.63486 23.7825 6.65941 23.7825C5.68382 23.7825 4.89307 22.9917 4.89307 22.0162ZM18.0197 22.0162C18.0197 21.0406 18.8116 20.2487 19.7872 20.2487C20.7628 20.2487 21.5547 21.0406 21.5547 22.0162C21.5547 22.9919 20.7627 23.7825 19.7872 23.7825C18.8118 23.7825 18.0197 22.9919 18.0197 22.0162ZM18.5899 10.5941C18.5899 10.1109 18.1981 9.71915 17.7149 9.71915H14.4797L14.361 9.72713C13.9339 9.78507 13.6047 10.1512 13.6047 10.5941C13.6047 11.0774 13.9964 11.4691 14.4797 11.4691H17.7149L17.8336 11.4612C18.2607 11.4032 18.5899 11.0371 18.5899 10.5941Z"
                            fill="#A50413"
                          />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="box">
                  <div class="image">
                    <img src="img/best-3.png" alt="" />
                  </div>
                  <h2>Giỏ quà nhập ngoại</h2>
                  <p class="content">
                    Ngoài giỏ quà Tết truyền thống, hiện nay còn có nhiều loại
                    giỏ quà Tết độc đáo, mang phong cách hiện
                  </p>

                  <p class="cost">750.000đ</p>

                  <div class="button">
                    <a href="/detailProduct.html" class="detail">Chi tiết</a>
                    <a href="#" class="cart">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Buy">
                          <path
                            id="Buy_2"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.3575 0.929465L1.23914 0.917087C0.808429 0.901342 0.421637 1.20593 0.346091 1.64242L0.333713 1.76078C0.317968 2.19149 0.62256 2.57828 1.05905 2.65383L2.81956 2.95831L3.88651 15.67L3.90859 15.861C4.12325 17.3106 5.37001 18.4003 6.85494 18.4003H19.5856L19.7773 18.3942C21.1731 18.3051 22.3303 17.2496 22.534 15.8474L23.6413 8.19596L23.6604 8.02021C23.7623 6.62129 22.654 5.40715 21.2271 5.40715H4.78072L4.50687 2.13846L4.48623 2.00913C4.40638 1.67276 4.13294 1.40983 3.78416 1.34947L1.3575 0.929465ZM6.71968 16.643C6.14186 16.5797 5.67976 16.1157 5.63041 15.5241L4.92772 7.15715H21.2271L21.3299 7.16471C21.6983 7.21947 21.9644 7.56396 21.9093 7.9454L20.8021 15.5963L20.7744 15.7331C20.6339 16.2681 20.1493 16.6503 19.5856 16.6503H6.85494L6.71968 16.643ZM4.89307 22.0162C4.89307 21.0407 5.68369 20.2487 6.65941 20.2487C7.63499 20.2487 8.42691 21.0406 8.42691 22.0162C8.42691 22.9919 7.63486 23.7825 6.65941 23.7825C5.68382 23.7825 4.89307 22.9917 4.89307 22.0162ZM18.0197 22.0162C18.0197 21.0406 18.8116 20.2487 19.7872 20.2487C20.7628 20.2487 21.5547 21.0406 21.5547 22.0162C21.5547 22.9919 20.7627 23.7825 19.7872 23.7825C18.8118 23.7825 18.0197 22.9919 18.0197 22.0162ZM18.5899 10.5941C18.5899 10.1109 18.1981 9.71915 17.7149 9.71915H14.4797L14.361 9.72713C13.9339 9.78507 13.6047 10.1512 13.6047 10.5941C13.6047 11.0774 13.9964 11.4691 14.4797 11.4691H17.7149L17.8336 11.4612C18.2607 11.4032 18.5899 11.0371 18.5899 10.5941Z"
                            fill="#A50413"
                          />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="box">
                  <div class="image">
                    <img src="img/best-4.png" alt="" />
                  </div>
                  <h2>Giỏ quà phát tài</h2>
                  <p class="content">
                    Ngoài giỏ quà Tết truyền thống, hiện nay còn có nhiều loại
                    giỏ quà Tết độc đáo, mang phong cách hiện
                  </p>

                  <p class="cost">750.000đ</p>

                  <div class="button">
                    <a href="/detailProduct.html" class="detail">Chi tiết</a>
                    <a href="#" class="cart">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Buy">
                          <path
                            id="Buy_2"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.3575 0.929465L1.23914 0.917087C0.808429 0.901342 0.421637 1.20593 0.346091 1.64242L0.333713 1.76078C0.317968 2.19149 0.62256 2.57828 1.05905 2.65383L2.81956 2.95831L3.88651 15.67L3.90859 15.861C4.12325 17.3106 5.37001 18.4003 6.85494 18.4003H19.5856L19.7773 18.3942C21.1731 18.3051 22.3303 17.2496 22.534 15.8474L23.6413 8.19596L23.6604 8.02021C23.7623 6.62129 22.654 5.40715 21.2271 5.40715H4.78072L4.50687 2.13846L4.48623 2.00913C4.40638 1.67276 4.13294 1.40983 3.78416 1.34947L1.3575 0.929465ZM6.71968 16.643C6.14186 16.5797 5.67976 16.1157 5.63041 15.5241L4.92772 7.15715H21.2271L21.3299 7.16471C21.6983 7.21947 21.9644 7.56396 21.9093 7.9454L20.8021 15.5963L20.7744 15.7331C20.6339 16.2681 20.1493 16.6503 19.5856 16.6503H6.85494L6.71968 16.643ZM4.89307 22.0162C4.89307 21.0407 5.68369 20.2487 6.65941 20.2487C7.63499 20.2487 8.42691 21.0406 8.42691 22.0162C8.42691 22.9919 7.63486 23.7825 6.65941 23.7825C5.68382 23.7825 4.89307 22.9917 4.89307 22.0162ZM18.0197 22.0162C18.0197 21.0406 18.8116 20.2487 19.7872 20.2487C20.7628 20.2487 21.5547 21.0406 21.5547 22.0162C21.5547 22.9919 20.7627 23.7825 19.7872 23.7825C18.8118 23.7825 18.0197 22.9919 18.0197 22.0162ZM18.5899 10.5941C18.5899 10.1109 18.1981 9.71915 17.7149 9.71915H14.4797L14.361 9.72713C13.9339 9.78507 13.6047 10.1512 13.6047 10.5941C13.6047 11.0774 13.9964 11.4691 14.4797 11.4691H17.7149L17.8336 11.4612C18.2607 11.4032 18.5899 11.0371 18.5899 10.5941Z"
                            fill="#A50413"
                          />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="container">
                <div class="box">
                  <div class="image">
                    <img src="img/best-1.png" alt="" />
                  </div>
                  <h2>giỏ kẹo mùa xuân</h2>
                  <p class="content">
                    Ngoài giỏ quà Tết truyền thống, hiện nay còn có nhiều loại
                    giỏ quà Tết độc đáo, mang phong cách hiện
                  </p>

                  <p class="cost">750.000đ</p>

                  <div class="button">
                    <a href="/detailProduct.html" class="detail">Chi tiết</a>
                    <a href="#" class="cart">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Buy">
                          <path
                            id="Buy_2"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.3575 0.929465L1.23914 0.917087C0.808429 0.901342 0.421637 1.20593 0.346091 1.64242L0.333713 1.76078C0.317968 2.19149 0.62256 2.57828 1.05905 2.65383L2.81956 2.95831L3.88651 15.67L3.90859 15.861C4.12325 17.3106 5.37001 18.4003 6.85494 18.4003H19.5856L19.7773 18.3942C21.1731 18.3051 22.3303 17.2496 22.534 15.8474L23.6413 8.19596L23.6604 8.02021C23.7623 6.62129 22.654 5.40715 21.2271 5.40715H4.78072L4.50687 2.13846L4.48623 2.00913C4.40638 1.67276 4.13294 1.40983 3.78416 1.34947L1.3575 0.929465ZM6.71968 16.643C6.14186 16.5797 5.67976 16.1157 5.63041 15.5241L4.92772 7.15715H21.2271L21.3299 7.16471C21.6983 7.21947 21.9644 7.56396 21.9093 7.9454L20.8021 15.5963L20.7744 15.7331C20.6339 16.2681 20.1493 16.6503 19.5856 16.6503H6.85494L6.71968 16.643ZM4.89307 22.0162C4.89307 21.0407 5.68369 20.2487 6.65941 20.2487C7.63499 20.2487 8.42691 21.0406 8.42691 22.0162C8.42691 22.9919 7.63486 23.7825 6.65941 23.7825C5.68382 23.7825 4.89307 22.9917 4.89307 22.0162ZM18.0197 22.0162C18.0197 21.0406 18.8116 20.2487 19.7872 20.2487C20.7628 20.2487 21.5547 21.0406 21.5547 22.0162C21.5547 22.9919 20.7627 23.7825 19.7872 23.7825C18.8118 23.7825 18.0197 22.9919 18.0197 22.0162ZM18.5899 10.5941C18.5899 10.1109 18.1981 9.71915 17.7149 9.71915H14.4797L14.361 9.72713C13.9339 9.78507 13.6047 10.1512 13.6047 10.5941C13.6047 11.0774 13.9964 11.4691 14.4797 11.4691H17.7149L17.8336 11.4612C18.2607 11.4032 18.5899 11.0371 18.5899 10.5941Z"
                            fill="#A50413"
                          />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="box">
                  <div class="image">
                    <img src="img/best-2.png" alt="" />
                  </div>
                  <h2>Giỏ quà wine</h2>
                  <p class="content">
                    Ngoài giỏ quà Tết truyền thống, hiện nay còn có nhiều loại
                    giỏ quà Tết độc đáo, mang phong cách hiện
                  </p>

                  <p class="cost">750.000đ</p>

                  <div class="button">
                    <a href="/detailProduct.html" class="detail">Chi tiết</a>
                    <a href="#" class="cart">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Buy">
                          <path
                            id="Buy_2"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.3575 0.929465L1.23914 0.917087C0.808429 0.901342 0.421637 1.20593 0.346091 1.64242L0.333713 1.76078C0.317968 2.19149 0.62256 2.57828 1.05905 2.65383L2.81956 2.95831L3.88651 15.67L3.90859 15.861C4.12325 17.3106 5.37001 18.4003 6.85494 18.4003H19.5856L19.7773 18.3942C21.1731 18.3051 22.3303 17.2496 22.534 15.8474L23.6413 8.19596L23.6604 8.02021C23.7623 6.62129 22.654 5.40715 21.2271 5.40715H4.78072L4.50687 2.13846L4.48623 2.00913C4.40638 1.67276 4.13294 1.40983 3.78416 1.34947L1.3575 0.929465ZM6.71968 16.643C6.14186 16.5797 5.67976 16.1157 5.63041 15.5241L4.92772 7.15715H21.2271L21.3299 7.16471C21.6983 7.21947 21.9644 7.56396 21.9093 7.9454L20.8021 15.5963L20.7744 15.7331C20.6339 16.2681 20.1493 16.6503 19.5856 16.6503H6.85494L6.71968 16.643ZM4.89307 22.0162C4.89307 21.0407 5.68369 20.2487 6.65941 20.2487C7.63499 20.2487 8.42691 21.0406 8.42691 22.0162C8.42691 22.9919 7.63486 23.7825 6.65941 23.7825C5.68382 23.7825 4.89307 22.9917 4.89307 22.0162ZM18.0197 22.0162C18.0197 21.0406 18.8116 20.2487 19.7872 20.2487C20.7628 20.2487 21.5547 21.0406 21.5547 22.0162C21.5547 22.9919 20.7627 23.7825 19.7872 23.7825C18.8118 23.7825 18.0197 22.9919 18.0197 22.0162ZM18.5899 10.5941C18.5899 10.1109 18.1981 9.71915 17.7149 9.71915H14.4797L14.361 9.72713C13.9339 9.78507 13.6047 10.1512 13.6047 10.5941C13.6047 11.0774 13.9964 11.4691 14.4797 11.4691H17.7149L17.8336 11.4612C18.2607 11.4032 18.5899 11.0371 18.5899 10.5941Z"
                            fill="#A50413"
                          />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="box">
                  <div class="image">
                    <img src="img/best-3.png" alt="" />
                  </div>
                  <h2>Giỏ quà nhập ngoại</h2>
                  <p class="content">
                    Ngoài giỏ quà Tết truyền thống, hiện nay còn có nhiều loại
                    giỏ quà Tết độc đáo, mang phong cách hiện
                  </p>

                  <p class="cost">750.000đ</p>

                  <div class="button">
                    <a href="/detailProduct.html" class="detail">Chi tiết</a>
                    <a href="#" class="cart">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Buy">
                          <path
                            id="Buy_2"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.3575 0.929465L1.23914 0.917087C0.808429 0.901342 0.421637 1.20593 0.346091 1.64242L0.333713 1.76078C0.317968 2.19149 0.62256 2.57828 1.05905 2.65383L2.81956 2.95831L3.88651 15.67L3.90859 15.861C4.12325 17.3106 5.37001 18.4003 6.85494 18.4003H19.5856L19.7773 18.3942C21.1731 18.3051 22.3303 17.2496 22.534 15.8474L23.6413 8.19596L23.6604 8.02021C23.7623 6.62129 22.654 5.40715 21.2271 5.40715H4.78072L4.50687 2.13846L4.48623 2.00913C4.40638 1.67276 4.13294 1.40983 3.78416 1.34947L1.3575 0.929465ZM6.71968 16.643C6.14186 16.5797 5.67976 16.1157 5.63041 15.5241L4.92772 7.15715H21.2271L21.3299 7.16471C21.6983 7.21947 21.9644 7.56396 21.9093 7.9454L20.8021 15.5963L20.7744 15.7331C20.6339 16.2681 20.1493 16.6503 19.5856 16.6503H6.85494L6.71968 16.643ZM4.89307 22.0162C4.89307 21.0407 5.68369 20.2487 6.65941 20.2487C7.63499 20.2487 8.42691 21.0406 8.42691 22.0162C8.42691 22.9919 7.63486 23.7825 6.65941 23.7825C5.68382 23.7825 4.89307 22.9917 4.89307 22.0162ZM18.0197 22.0162C18.0197 21.0406 18.8116 20.2487 19.7872 20.2487C20.7628 20.2487 21.5547 21.0406 21.5547 22.0162C21.5547 22.9919 20.7627 23.7825 19.7872 23.7825C18.8118 23.7825 18.0197 22.9919 18.0197 22.0162ZM18.5899 10.5941C18.5899 10.1109 18.1981 9.71915 17.7149 9.71915H14.4797L14.361 9.72713C13.9339 9.78507 13.6047 10.1512 13.6047 10.5941C13.6047 11.0774 13.9964 11.4691 14.4797 11.4691H17.7149L17.8336 11.4612C18.2607 11.4032 18.5899 11.0371 18.5899 10.5941Z"
                            fill="#A50413"
                          />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>

                <div class="box">
                  <div class="image">
                    <img src="img/best-4.png" alt="" />
                  </div>
                  <h2>Giỏ quà phát tài</h2>
                  <p class="content">
                    Ngoài giỏ quà Tết truyền thống, hiện nay còn có nhiều loại
                    giỏ quà Tết độc đáo, mang phong cách hiện
                  </p>

                  <p class="cost">750.000đ</p>

                  <div class="button">
                    <a href="/detailProduct.html" class="detail">Chi tiết</a>
                    <a href="#" class="cart">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g id="Buy">
                          <path
                            id="Buy_2"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M1.3575 0.929465L1.23914 0.917087C0.808429 0.901342 0.421637 1.20593 0.346091 1.64242L0.333713 1.76078C0.317968 2.19149 0.62256 2.57828 1.05905 2.65383L2.81956 2.95831L3.88651 15.67L3.90859 15.861C4.12325 17.3106 5.37001 18.4003 6.85494 18.4003H19.5856L19.7773 18.3942C21.1731 18.3051 22.3303 17.2496 22.534 15.8474L23.6413 8.19596L23.6604 8.02021C23.7623 6.62129 22.654 5.40715 21.2271 5.40715H4.78072L4.50687 2.13846L4.48623 2.00913C4.40638 1.67276 4.13294 1.40983 3.78416 1.34947L1.3575 0.929465ZM6.71968 16.643C6.14186 16.5797 5.67976 16.1157 5.63041 15.5241L4.92772 7.15715H21.2271L21.3299 7.16471C21.6983 7.21947 21.9644 7.56396 21.9093 7.9454L20.8021 15.5963L20.7744 15.7331C20.6339 16.2681 20.1493 16.6503 19.5856 16.6503H6.85494L6.71968 16.643ZM4.89307 22.0162C4.89307 21.0407 5.68369 20.2487 6.65941 20.2487C7.63499 20.2487 8.42691 21.0406 8.42691 22.0162C8.42691 22.9919 7.63486 23.7825 6.65941 23.7825C5.68382 23.7825 4.89307 22.9917 4.89307 22.0162ZM18.0197 22.0162C18.0197 21.0406 18.8116 20.2487 19.7872 20.2487C20.7628 20.2487 21.5547 21.0406 21.5547 22.0162C21.5547 22.9919 20.7627 23.7825 19.7872 23.7825C18.8118 23.7825 18.0197 22.9919 18.0197 22.0162ZM18.5899 10.5941C18.5899 10.1109 18.1981 9.71915 17.7149 9.71915H14.4797L14.361 9.72713C13.9339 9.78507 13.6047 10.1512 13.6047 10.5941C13.6047 11.0774 13.9964 11.4691 14.4797 11.4691H17.7149L17.8336 11.4612C18.2607 11.4032 18.5899 11.0371 18.5899 10.5941Z"
                            fill="#A50413"
                          />
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="margin-top: 3.2rem">
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <!-- <div class="swiper-pagination"></div> -->
    </section>
    <!-- section best seller ends -->

    <!-- banner 2 -->
    <div class="banner-2">
      <div class="content">
        <img src="img/banner-2.png" />
        <h1>
          “ Tự hào là đơn vị cung cấp quà tặng, rượu tết đã có mặt hơn 20 năm
          trên thị trường Việt Nam ”
        </h1>
      </div>
    </div>

    <!-- section category starts -->
    <section class="category">
      <div class="content">
        <h1>Khám phá danh mục sản phẩm</h1>
        <p>
          Tiêu chí của chúng tôi chính là luôn mang đến cho khách hàng những sản
          phẩm chất lượng tốt nhất
        </p>
        <a href="#" class="btn">Xem thêm</a>
      </div>

      <!-- test start -->

      <div class="list-category">
        <div class="container">
          <div class="box">
            <div class="image">
              <img src="img/category-1.png" alt="" />
            </div>
            <p>Phổ biến</p>
            <h2>Giỏ quà tết</h2>
          </div>

          <div class="box">
            <div class="image">
              <img src="img/category-2.png" alt="" />
            </div>
            <p>Phổ biến</p>
            <h2>Rượu tết</h2>
          </div>

          <div class="box">
            <div class="image">
              <img src="img/category-3.png" alt="" />
            </div>
            <p>Phổ biến</p>
            <h2>Hộp quà tết</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- section category ends -->

    <!-- sections news starts -->
    <section class="news">
      <h1 class="heading">Tin tức</h1>

      <nav class="navigation">
        <a href="#" class="animation-tag-a">Mới nhất</a>
        <a href="#" class="animation-tag-a">Phổ biến</a>
      </nav>

      <div class="container">
        <a href="/news-detail.html">
          <div class="box">
            <div>
              <img class="thumbnail" src="img/news-1.png" alt="" />
            </div>
            <h1 class="title">
              Sự khác biệt giữa tết miền Bắc và tết miền Nam
            </h1>
            <p class="content">
              Dù cùng sinh sống trên lãnh thổ Việt Nam nhưng do khác nhau về đặc
              điểm khí hậu, văn hóa và con người nên hai miền Bắc -
            </p>

            <div class="infor-author">
              <img src="img/avatar-1.png" alt="" />
              <div>
                <p class="name">Phạm Xuân Cường</p>
                <p class="datetime">Ngày 5 tháng 6 &#8226; 8 giờ trước</p>
              </div>
            </div>
          </div>
        </a>

        <a href="/news-detail.html">
          <div class="box">
            <div>
              <img class="thumbnail" src="img/news-2.jpg" alt="" />
            </div>
            <h1 class="title">Thăm 5 làng gói bánh chưng nổi tiếng miền Bắc</h1>
            <p class="content">
              Những ngày giáp tết này, không khí tại các làng nghề càng trở nên
              hối hả nhưng có lẽ làng nghề được quan tâm nhiều nhất thời...
            </p>

            <div class="infor-author">
              <img src="img/avatar-2.png" alt="" />
              <div>
                <p class="name">Lế Tế Trường</p>
                <p class="datetime">Ngày 5 tháng 6 &#8226; 8 giờ trước</p>
              </div>
            </div>
          </div>
        </a>

        <a href="/news-detail.html">
          <div class="box">
            <div>
              <img class="thumbnail" src="img/news-3.jpg" alt="" />
            </div>
            <h1 class="title">
              Phong tục đón tết nguyên đán của người Việt Nam
            </h1>
            <p class="content">
              Mỗi người Việt Nam có tục hằng năm mỗi khi Tết đến dù là bận bịu
              công việc tới cỡ nào, hay định cư, sinh sống tại nơi đâu thì...
            </p>

            <div class="infor-author">
              <img src="img/avatar-3.png" alt="" />
              <div>
                <p class="name">Nguyễn Anh Duy</p>
                <p class="datetime">Ngày 5 tháng 6 &#8226; 8 giờ trước</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="flex">
        <a href="/news.html" class="btn">Xem thêm</a>
      </div>
    </section>

    <!-- section news ends -->

    <!-- section comment starts -->
    <section class="comment">
      <h1 class="heading">Mọi người nói gì về XOAN store?</h1>
      <p class="open">Những chia sẻ của khách hàng khi đến với chúng tôi</p>

      <div class="list-comment">
        <div class="swiper comment-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="box">
                <div class="info-comment">
                  <div class="image">
                    <img src="img/avatar-comment.png" alt="" />
                  </div>
                  <div>
                    <p class="name">Phạm Xuân Cường</p>
                    <p class="job">Lập trình viên</p>
                  </div>
                </div>
                <p class="detail">
                  “Trải nghiệm mua hàng trên XOAN store thật sự rất tuyệt vời,
                  sản phẩm đa dạng, chất lượng tốt, giá cả hợp lý, giao hàng
                  nhanh chóng. Tôi rất hài lòng và sẽ tiếp tục ủng hộ”
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="box">
                <div class="info-comment">
                  <div class="image">
                    <img src="img/avatar-comment-2.jpg" alt="" />
                  </div>
                  <div>
                    <p class="name">Đàm Hoàng Lĩnh</p>
                    <p class="job">Kĩ sư cầu đường</p>
                  </div>
                </div>
                <p class="detail">
                  “Trải nghiệm mua hàng trên XOAN store thật sự rất tuyệt vời,
                  sản phẩm đa dạng, chất lượng tốt, giá cả hợp lý, giao hàng
                  nhanh chóng. Tôi rất hài lòng và sẽ tiếp tục ủng hộ”
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="box">
                <div class="info-comment">
                  <div class="image">
                    <img src="img/avatar-comment-3.jpg" alt="" />
                  </div>
                  <div>
                    <p class="name">Hà Kim Oanh</p>
                    <p class="job">Phiên dịch viên</p>
                  </div>
                </div>
                <p class="detail">
                  “Trải nghiệm mua hàng trên XOAN store thật sự rất tuyệt vời,
                  sản phẩm đa dạng, chất lượng tốt, giá cả hợp lý, giao hàng
                  nhanh chóng. Tôi rất hài lòng và sẽ tiếp tục ủng hộ”
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div style="margin-top: 3.2rem">
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- section comment ends -->

    <!-- section contact starts -->
    <section class="contact">
      <h1 class="heading">Liên hệ với chúng tôi</h1>

      <div class="container">
        <div class="col-1">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d954091.723052763!2d105.94723596407002!3d20.91550611322959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac16f052bfff%3A0x1b2d644fdf1b4bae!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gQsOhbmggS-G6uW8gSOG6o2kgTWluaA!5e0!3m2!1svi!2s!4v1706342971917!5m2!1svi!2s"
            width="600"
            height="450"
            style="border: 0; border-radius: 6px"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          <!-- <img src="img/map.png" alt="" /> -->
        </div>
        <div class="col-2">
          <h1>Đặt câu hỏi cho chúng tôi</h1>
          <h2>
            Cảm ơn bạn đã đặt câu hỏi cho chúng tôi, chúng tôi sẽ liên hiện với
            bạn sau 24H tính từ lúc bạn đặt câu hỏi.
          </h2>

          <form action="">
            <div class="form-name">
              <p class="text-form">Họ và tên</p>
              <input class="input-form" type="text" />
            </div>

            <div class="form-info">
              <div class="phone-number">
                <p class="text-form">Số điện thoại</p>
                <input class="input-form" type="text" />
              </div>
              <div class="email">
                <p class="text-form">Địa chỉ Email</p>
                <input class="input-form" type="text" />
              </div>
            </div>

            <div class="form-question">
              <p class="text-form">Câu hỏi</p>
              <textarea
                class="input-form"
                name=""
                id=""
                cols="30"
                rows="10"
              ></textarea>
            </div>
          </form>
          <div class="button">
            <a class="btn" href="#">Gửi ngay</a>
          </div>
        </div>
      </div>
    </section>
    <!-- section contact ends -->

    <!-- section footer starts -->

    <div style="background-color: #a50413">
      <section class="footer">
        <div class="row-1">
          <div class="address">
            <h1>XOAN store</h1>

            <p class="text-footer">
              <svg
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="phone">
                  <path
                    id="Vector 2186"
                    d="M5.03383 0.533203H2.66666C1.48845 0.533203 0.533325 1.48833 0.533325 2.66654V4.79987C0.533325 10.6909 5.30895 15.4665 11.2 15.4665H13.3333C14.5115 15.4665 15.4667 14.5114 15.4667 13.3332V11.8591C15.4667 11.4551 15.2384 11.0857 14.877 10.9051L12.3 9.61655C11.7194 9.32626 11.0163 9.61749 10.8111 10.2333L10.4935 11.1862C10.2877 11.8034 9.65458 12.1708 9.01662 12.0432C6.46323 11.5325 4.46734 9.53663 3.95667 6.98324C3.82907 6.34528 4.1965 5.71215 4.81371 5.50641L5.99625 5.11223C6.52502 4.93597 6.82894 4.38233 6.69376 3.8416L6.06865 1.34117C5.94994 0.86632 5.52329 0.533203 5.03383 0.533203Z"
                    stroke="white"
                  />
                </g>
              </svg>
              0898645513
            </p>

            <p class="text-footer">
              <svg
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="Outline / Mesages, Conversation /  Letter">
                  <path
                    id="Vector"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M6.6291 2.1665H9.37099C10.5962 2.16649 11.5666 2.16649 12.3261 2.26859C13.1077 2.37368 13.7403 2.59509 14.2392 3.094C14.7381 3.59291 14.9595 4.22554 15.0646 5.00716C15.1667 5.76663 15.1667 6.73706 15.1667 7.96223V8.03745C15.1667 9.26262 15.1667 10.233 15.0646 10.9925C14.9595 11.7741 14.7381 12.4068 14.2392 12.9057C13.7403 13.4046 13.1077 13.626 12.3261 13.7311C11.5666 13.8332 10.5962 13.8332 9.37098 13.8332H6.6291C5.40393 13.8332 4.4335 13.8332 3.67403 13.7311C2.89241 13.626 2.25978 13.4046 1.76087 12.9057C1.26196 12.4068 1.04055 11.7741 0.935464 10.9925C0.833355 10.233 0.833364 9.26262 0.833374 8.03745V7.96223C0.833364 6.73705 0.833355 5.76663 0.935464 5.00716C1.04055 4.22554 1.26196 3.59291 1.76087 3.094C2.25978 2.59509 2.89241 2.37368 3.67403 2.26859C4.4335 2.16649 5.40392 2.16649 6.6291 2.1665ZM3.80727 3.25968C3.13655 3.34985 2.75012 3.51897 2.46798 3.80111C2.18584 4.08325 2.01672 4.46968 1.92655 5.1404C1.83444 5.82551 1.83337 6.72862 1.83337 7.99984C1.83337 9.27105 1.83444 10.1742 1.92655 10.8593C2.01672 11.53 2.18584 11.9164 2.46798 12.1986C2.75012 12.4807 3.13655 12.6498 3.80727 12.74C4.49238 12.8321 5.39549 12.8332 6.66671 12.8332H9.33337C10.6046 12.8332 11.5077 12.8321 12.1928 12.74C12.8635 12.6498 13.25 12.4807 13.5321 12.1986C13.8142 11.9164 13.9834 11.53 14.0735 10.8593C14.1656 10.1742 14.1667 9.27105 14.1667 7.99984C14.1667 6.72862 14.1656 5.82551 14.0735 5.1404C13.9834 4.46968 13.8142 4.08325 13.5321 3.80111C13.25 3.51897 12.8635 3.34985 12.1928 3.25968C11.5077 3.16757 10.6046 3.1665 9.33337 3.1665H6.66671C5.39549 3.1665 4.49238 3.16757 3.80727 3.25968ZM3.61593 5.01308C3.79271 4.80094 4.10799 4.77228 4.32013 4.94906L5.7594 6.14845C6.38137 6.66676 6.81319 7.02545 7.17776 7.25992C7.53067 7.4869 7.76999 7.56309 8.00004 7.56309C8.23009 7.56309 8.46941 7.4869 8.82232 7.25992C9.18689 7.02545 9.61871 6.66676 10.2407 6.14845L11.6799 4.94906C11.8921 4.77228 12.2074 4.80094 12.3842 5.01308C12.5609 5.22522 12.5323 5.5405 12.3201 5.71728L10.8558 6.93755C10.2649 7.42999 9.78596 7.82912 9.36326 8.10099C8.92293 8.38419 8.49409 8.56309 8.00004 8.56309C7.50599 8.56309 7.07716 8.38419 6.63683 8.10099C6.21412 7.82912 5.73518 7.42999 5.14428 6.93756L3.67995 5.71728C3.46781 5.5405 3.43915 5.22522 3.61593 5.01308Z"
                    fill="white"
                  />
                </g>
              </svg>
              Xoanstore@gmail.com
            </p>

            <p class="text-footer">
              <svg
                width="16"
                height="16"
                viewBox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="Outline / Map &#38; Location / Map Point">
                  <path
                    id="Vector"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M2.16663 6.76236C2.16663 3.49634 4.76997 0.833496 7.99996 0.833496C11.23 0.833496 13.8333 3.49634 13.8333 6.76236C13.8333 8.33909 13.3839 10.0321 12.5896 11.4947C11.7962 12.9556 10.637 14.225 9.18697 14.9028C8.43367 15.2549 7.56625 15.2549 6.81295 14.9028C5.36287 14.225 4.2037 12.9556 3.41033 11.4947C2.61598 10.0321 2.16663 8.33909 2.16663 6.76236ZM7.99996 1.8335C5.33891 1.8335 3.16663 4.03182 3.16663 6.76236C3.16663 8.16041 3.56838 9.69044 4.2891 11.0175C5.01079 12.3463 6.03064 13.4333 7.23639 13.9968C7.72133 14.2235 8.27859 14.2235 8.76353 13.9968C9.96928 13.4333 10.9891 12.3463 11.7108 11.0175C12.4315 9.69044 12.8333 8.16041 12.8333 6.76236C12.8333 4.03182 10.661 1.8335 7.99996 1.8335ZM7.99996 5.16683C7.17153 5.16683 6.49996 5.8384 6.49996 6.66683C6.49996 7.49526 7.17153 8.16683 7.99996 8.16683C8.82839 8.16683 9.49996 7.49526 9.49996 6.66683C9.49996 5.8384 8.82839 5.16683 7.99996 5.16683ZM5.49996 6.66683C5.49996 5.28612 6.61925 4.16683 7.99996 4.16683C9.38067 4.16683 10.5 5.28612 10.5 6.66683C10.5 8.04754 9.38067 9.16683 7.99996 9.16683C6.61925 9.16683 5.49996 8.04754 5.49996 6.66683Z"
                    fill="white"
                  />
                </g>
              </svg>
              234 Pham Van Dong, Bac Tu Liem, Hanoi, Vietnam
            </p>
          </div>

          <div class="introduce">
            <h2>Giới thiệu</h2>
            <a href="#" class="text-footer">&#8226; Chính sách bảo mật</a>
            <a href="#" class="text-footer">&#8226; Chính sách vận chuyển </a>
            <a href="#" class="text-footer">&#8226; Chính sách đổi trả</a>
            <a href="#" class="text-footer">&#8226; Chính sách sử dụng</a>
          </div>

          <div class="product">
            <h2>Sản phẩm</h2>
            <a href="#" class="text-footer">&#8226; Đồ trang trí</a>
            <a href="#" class="text-footer">&#8226; Hộp quà tết</a>
            <a href="#" class="text-footer">&#8226; Cây cảnh chơi tết</a>
          </div>

          <div class="guide">
            <h2>Hướng dẫn</h2>
            <a href="#" class="text-footer">&#8226; Hướng dẫn mua hàng</a>
            <a href="#" class="text-footer">&#8226; Hướng dẫn thanh toán</a>
            <a href="#" class="text-footer">&#8226; Hướng dẫn giao nhận</a>
            <a href="#" class="text-footer">&#8226; Điều khoản dịch vụ</a>
          </div>
        </div>

        <div class="row-2">
          <div class="copy-right">© 2024 XOAN store. All rights reserved.</div>
          <div class="icons">
            <img src="img/facebook.png" alt="" />
            <img src="img/instagram.png" alt="" />
            <img src="img/Twitter.png" alt="" />
            <img src="img/YouTube.png" alt="" />
            <img src="img/TikTok.png" alt="" />
          </div>
        </div>
      </section>
    </div>
    <!-- section footer ends -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/scripts.js"></script>
  </body>
</html>
