@extends('layout.main')
@section('body')
<div class="container">
    <!-- <div class="background-container"> -->
    <div class="inner-body px-lg-5 px-md-3">
        <!----- Page Header ----->
        <div class="page-header ">
            <div class="row justify-content-between align-items-center pt-3 px-3 px-xxl-5 px-lg-5 px-md-4 px-sm-3 ">
                <div class="col-lg-6 col-md-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active" aria-current="page">Content</li>
                        </ol>
                    </nav>
                    <span class="main-content-title">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="#F4E28D" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.3327 4V8M10.666 4V8" stroke="#0054C6" stroke-width="2" stroke-linecap="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6667 5.3335H13.3333V8.00016C13.3333 8.70741 13.0524 9.38568 12.5523 9.88578C12.0522 10.3859 11.3739 10.6668 10.6667 10.6668C9.95942 10.6668 9.28115 10.3859 8.78105 9.88578C8.28095 9.38568 8 8.70741 8 8.00016V5.43483C6.7 5.56283 5.82533 5.85216 5.172 6.5055C4 7.67616 4 9.56283 4 13.3335V20.0002C4 23.7708 4 25.6575 5.172 26.8282C6.34267 28.0002 8.22933 28.0002 12 28.0002H20C23.7707 28.0002 25.6573 28.0002 26.828 26.8282C28 25.6575 28 23.7708 28 20.0002V13.3335C28 9.56283 28 7.67616 26.828 6.5055C26.1747 5.85216 25.3 5.56283 24 5.43483V8.00016C24 8.70741 23.719 9.38568 23.219 9.88578C22.7189 10.3859 22.0406 10.6668 21.3333 10.6668C20.6261 10.6668 19.9478 10.3859 19.4477 9.88578C18.9476 9.38568 18.6667 8.70741 18.6667 8.00016V5.3335ZM9.33333 16.0002C9.33333 15.6465 9.47381 15.3074 9.72386 15.0574C9.97391 14.8073 10.313 14.6668 10.6667 14.6668H21.3333C21.687 14.6668 22.0261 14.8073 22.2761 15.0574C22.5262 15.3074 22.6667 15.6465 22.6667 16.0002C22.6667 16.3538 22.5262 16.6929 22.2761 16.943C22.0261 17.193 21.687 17.3335 21.3333 17.3335H10.6667C10.313 17.3335 9.97391 17.193 9.72386 16.943C9.47381 16.6929 9.33333 16.3538 9.33333 16.0002ZM10.6667 20.0002C10.313 20.0002 9.97391 20.1406 9.72386 20.3907C9.47381 20.6407 9.33333 20.9799 9.33333 21.3335C9.33333 21.6871 9.47381 22.0263 9.72386 22.2763C9.97391 22.5264 10.313 22.6668 10.6667 22.6668H21.3333C21.687 22.6668 22.0261 22.5264 22.2761 22.2763C22.5262 22.0263 22.6667 21.6871 22.6667 21.3335C22.6667 20.9799 22.5262 20.6407 22.2761 20.3907C22.0261 20.1406 21.687 20.0002 21.3333 20.0002H10.6667Z" fill="#F4E28D" />
                        </svg>
                        Content
                    </span>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-end pt-3">
                    <button type="button" class="btn btn-add me-3" data-bs-toggle="modal" data-bs-target="#deskModal">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 13.3287H13V19.3287H11V13.3287H5V11.3287H11V5.32867H13V11.3287H19V13.3287Z" fill="#000000" />
                        </svg>
                        <span class="hide-button">Add Content</span>
                    </button>
                    <div class="input-group input-group-sm w-50">
                        <input type="text" class="form-control form-control-sm" placeholder="Enter a Search">
                        <button class="btn btn-primary" type="button" id="button-addon2">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.9667 19.25L12.1917 13.475C11.7333 13.8417 11.2063 14.1319 10.6104 14.3458C10.0146 14.5597 9.38056 14.6667 8.70833 14.6667C7.04306 14.6667 5.63383 14.0898 4.48067 12.936C3.3275 11.7822 2.75061 10.373 2.75 8.70833C2.74939 7.04367 3.32628 5.63444 4.48067 4.48067C5.63506 3.32689 7.04428 2.75 8.70833 2.75C10.3724 2.75 11.7819 3.32689 12.9369 4.48067C14.0919 5.63444 14.6685 7.04367 14.6667 8.70833C14.6667 9.38056 14.5597 10.0146 14.3458 10.6104C14.1319 11.2063 13.8417 11.7333 13.475 12.1917L19.25 17.9667L17.9667 19.25ZM8.70833 12.8333C9.85417 12.8333 10.8283 12.4324 11.6307 11.6307C12.4331 10.8289 12.8339 9.85478 12.8333 8.70833C12.8327 7.56189 12.4318 6.58808 11.6307 5.78692C10.8295 4.98575 9.85539 4.58456 8.70833 4.58333C7.56128 4.58211 6.58747 4.98331 5.78692 5.78692C4.98636 6.59053 4.58517 7.56433 4.58333 8.70833C4.5815 9.85233 4.9827 10.8264 5.78692 11.6307C6.59114 12.4349 7.56495 12.8358 8.70833 12.8333Z" fill="#0054C6" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!----- Page Header ----->

        <hr class="page-header-divider">

        <!----- Data Table ----->
        <div class="table-container pt-3 pb-3 px-3 px-xxl-5 px-lg-5 px-md-4 px-sm-3">
            <div class="table-inner table-responsive ">
                <table class="table table-hover content-table">
                    <thead>
                        <tr>
                            <th style="width: 7%;">#</th>
                            <th style="width: 10%;">Topic</th>
                            <th style="width: 10%;">Tag</th>
                            <th style="width: 30%;">Creation Date</th>
                            <th style="width: 7%;">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contents as $content)
                        <tr>
                            <td style="width: 7%;">{{ $content->id }}</td>
                            <td style="width: 10%;">{{ $content->topic }}</td>
                            <td style="width: 10%;">{{ $content->tags }}</td>
                            <td style="width: 30%;">{{ $content->created_at }}</td>
                            <td style="width: 7%;" class="fix-btn ">
                                <a class="btn-edit" data-bs-toggle="modal" data-bs-target="#deskModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M4 20V17.48L17.18 4.28802C17.2833 4.19668 17.3967 4.12602 17.52 4.07602C17.6433 4.02602 17.7723 4.00068 17.907 4.00002C18.0417 3.99935 18.1717 4.02068 18.297 4.06402C18.4237 4.10602 18.5403 4.18201 18.647 4.29201L19.714 5.36602C19.824 5.47202 19.8993 5.58868 19.94 5.71602C19.98 5.84268 20 5.96935 20 6.09602C20 6.23202 19.9773 6.36202 19.932 6.48602C19.886 6.60935 19.8133 6.72235 19.714 6.82502L6.519 20H4ZM17.504 7.58902L19 6.11102L17.889 5.00002L16.412 6.49602L17.504 7.58902Z" />
                                    </svg>
                                </a>
                                <a class="btn-del" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M7.616 20C7.15533 20 6.771 19.846 6.463 19.538C6.155 19.23 6.00067 18.8453 6 18.384V5.99998H5V4.99998H9V4.22998H15V4.99998H19V5.99998H18V18.385C18 18.845 17.846 19.2293 17.538 19.538C17.23 19.8466 16.8453 20.0006 16.384 20H7.616ZM9.808 17H10.808V7.99998H9.808V17ZM13.192 17H14.192V7.99998H13.192V17Z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!----- Data Table ----->

        <!----- Pagination ----->
        <div class="row  px-3 pb-3 px-xxl-5 px-lg-5 px-md-4 px-sm-3">
            <div class="col-12">
                <div class="d-flex justify-content-end align-items-center flex-wrap">
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!----- Pagination ----->
    </div>
</div>
@endsection