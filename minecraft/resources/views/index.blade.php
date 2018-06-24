@extends('layouts.app')
@section('menu-bar')
  @endsection
    <!--============ end Header ============-->
    <!--============ Start Main ============-->
    <main class="start_site padding_top">
      <section class="articles_section text-center">
        <div class="container">
          <h1 class="section_tit">Featured</h1>
          <p class="sec_desc">Here are some assignments, especially for you ;)</p>
          <div class="text-left blogs">
              <div class="row">
                <div class="col-sm-6 col-md-4">
                  <div class="blog box_shadow">
                    <div class="blog_img">
                      <img class="w-100" src="{{ asset('images/blog-inner.jpg') }}" alt="pic">
                    </div>
                    <div class="blog_content">
                      <a href="http://ah-theme.com/moby/moby/blogs.html#">
                        <p class="text-uppercase col_purple blog_title">How To Customize Moby App</p>
                        <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="blog_author d-flex justify-content-between align-items-center align-content-center">
                          <p class="text-capitalize">Johan Smit</p>
                          <div>
                            <div class="likes d-inline-block">
                              <svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path></svg><!-- <i class="far fa-heart"></i> --> <span class="likes_number">12</span>
                            </div>
                            <div class="comments d-inline-block">
                              <svg class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" data-prefix="far" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path></svg><!-- <i class="far fa-comments"></i> --> <span class="comments_number">5</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="blog box_shadow">
                    <div class="blog_img">
                      <img class="w-100" src="{{ asset('images/blog.jpg') }}" alt="pic">
                    </div>
                    <div class="blog_content">
                      <a href="http://ah-theme.com/moby/moby/blogs.html#">
                        <p class="text-uppercase col_purple blog_title">App Updates</p>
                        <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="blog_author d-flex justify-content-between align-items-center align-content-center">
                          <p class="text-capitalize">Johan Smit</p>
                          <div>
                            <div class="likes d-inline-block">
                              <svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path></svg><!-- <i class="far fa-heart"></i> --> <span class="likes_number">12</span>
                            </div>
                            <div class="comments d-inline-block">
                              <svg class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" data-prefix="far" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path></svg><!-- <i class="far fa-comments"></i> --> <span class="comments_number">5</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="blog box_shadow">
                    <div class="blog_img">
                      <img class="w-100" src="{{ asset('images/blog1.jpg') }}" alt="pic">
                    </div>
                    <div class="blog_content">
                      <a href="http://ah-theme.com/moby/moby/blogs.html#">
                        <p class="text-uppercase col_purple blog_title">How To Install App</p>
                        <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="blog_author d-flex justify-content-between align-items-center align-content-center">
                          <p class="text-capitalize">Johan Smit</p>
                          <div>
                            <div class="likes d-inline-block">
                              <svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path></svg><!-- <i class="far fa-heart"></i> --> <span class="likes_number">12</span>
                            </div>
                            <div class="comments d-inline-block">
                              <svg class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" data-prefix="far" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path></svg><!-- <i class="far fa-comments"></i> --> <span class="comments_number">5</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="blog box_shadow">
                    <div class="blog_img">
                      <img class="w-100" src="{{ asset('images/blog2.jpg') }}" alt="pic">
                    </div>
                    <div class="blog_content">
                      <a href="http://ah-theme.com/moby/moby/blogs.html#">
                        <p class="text-uppercase col_purple blog_title">Get ready to join us</p>
                        <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="blog_author d-flex justify-content-between align-items-center align-content-center">
                          <p class="text-capitalize">Johan Smit</p>
                          <div>
                            <div class="likes d-inline-block">
                              <svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path></svg><!-- <i class="far fa-heart"></i> --> <span class="likes_number">12</span>
                            </div>
                            <div class="comments d-inline-block">
                              <svg class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" data-prefix="far" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path></svg><!-- <i class="far fa-comments"></i> --> <span class="comments_number">5</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="blog box_shadow">
                    <div class="blog_img">
                      <img class="w-100" src="{{ asset('images/blog3.jpg') }}" alt="pic">
                    </div>
                    <div class="blog_content">
                      <a href="http://ah-theme.com/moby/moby/blogs.html#">
                        <p class="text-uppercase col_purple blog_title">How To Reset The App</p>
                        <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="blog_author d-flex justify-content-between align-items-center align-content-center">
                          <p class="text-capitalize">Johan Smit</p>
                          <div>
                            <div class="likes d-inline-block">
                              <svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path></svg><!-- <i class="far fa-heart"></i> --> <span class="likes_number">12</span>
                            </div>
                            <div class="comments d-inline-block">
                              <svg class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" data-prefix="far" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path></svg><!-- <i class="far fa-comments"></i> --> <span class="comments_number">5</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="blog box_shadow">
                    <div class="blog_img">
                      <img class="w-100" src="{{ asset('images/blog4.jpg') }}" alt="pic">
                    </div>
                    <div class="blog_content">
                      <a href="http://ah-theme.com/moby/moby/blogs.html#">
                        <p class="text-uppercase col_purple blog_title">Beautiful Journey</p>
                        <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="blog_author d-flex justify-content-between align-items-center align-content-center">
                          <p class="text-capitalize">Johan Smit</p>
                          <div>
                            <div class="likes d-inline-block">
                              <svg class="svg-inline--fa fa-heart fa-w-18" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path></svg><!-- <i class="far fa-heart"></i> --> <span class="likes_number">12</span>
                            </div>
                            <div class="comments d-inline-block">
                              <svg class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" data-prefix="far" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path></svg><!-- <i class="far fa-comments"></i> --> <span class="comments_number">5</span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item"><a class="page-link" href="http://ah-theme.com/moby/moby/blogs.html#"><svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <i class="fas fa-chevron-left"></i> --></a></li>
                  <li class="page-item  active"><a class="page-link" href="http://ah-theme.com/moby/moby/blogs.html#">1</a></li>
                  <li class="page-item"><a class="page-link" href="http://ah-theme.com/moby/moby/blogs.html#">2</a></li>
                  <li class="page-item"><a class="page-link" href="http://ah-theme.com/moby/moby/blogs.html#">3</a></li>
                  <li class="page-item"><a class="page-link" href="http://ah-theme.com/moby/moby/blogs.html#"><svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right"></i> --></a></li>
                </ul>
              </nav>
          </div>
        </div>
      </section>
    </main>
    <!--============ Start footer ============-->
    <footer class="footer_sec text-center">
      <div class="container">
        <p>© 2018 <a href="http://ah-theme.com/moby/moby/index.html"> Moby</a>. All rights reserved.</p>
      </div>
    </footer>
    <script src="{{ asset('js/jQuery-plugins.js.Download') }}"></script>
    <script src="{{ asset('js/scripts.js.Download') }}"></script>
  

</body>
</html>