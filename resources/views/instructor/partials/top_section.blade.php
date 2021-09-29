<div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <!-- Bg -->
        <div class="pt-16 rounded-top-md" style="
            background: url(/assets/images/background/profile-bg.jpg) no-repeat;
            background-size: cover;
            "></div>
        <div
            class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom-md shadow-sm">
            <div class="d-flex align-items-center">
                <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                    @if($user->img == "" || $user->img == null)
                    <img src="../assets/images/avatar/avatar-3.jpg" id="img-uploaded" class="avatar-xl rounded-circle" alt="" />
                    @else
                        <img src="uploads/profiles/{{$user->img}}" class="avatar-xl rounded-circle border border-4 border-white position-relative"
                        alt="" />
                    @endif

                    <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Verified">
                    <img src="/assets/images/svg/checked-mark.svg" alt="" height="30" width="30" />
                    </a>
                </div>
                <div class="lh-1">
                    <h2 class="mb-0">
                        {{$user->name}}
                    </h2>
                    <p class="mb-0 d-block">{{$user->role}}</p>
                </div>
            </div>
{{--             <div class="profileSocialLinks">
                <ul>
                    <li>
                        <a href="#"><i class="fe fe-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fe fe-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fe fe-github"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fe fe-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fe fe-youtube"></i></a>
                    </li>
                </ul>
            </div> --}}
            <div>
                <a href="/instructor/add-course" class="add-course-btn btn btn-primary btn-sm d-none d-md-block">Create New Course</a>
            </div>
        </div>
    </div>
</div>