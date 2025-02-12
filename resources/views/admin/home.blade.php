@extends('layouts.admin-dashboard')

@section('title', 'Home Dashboard')

@section('admin-content')
    @vite(['resources/css/admin/homeadmin.css'])

    <div style="display: flex; align-items: center; margin: 15px 0;">
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-right: 10px;">
        <div style="text-align: center; position: relative;">
            <span style="font-size: 1.75rem; font-weight: bold; background-color: #fff; padding: 0 10px;">Welcome
                {{ Auth::user()->possition }}</span>
            <br>
            <span style="font-size: 0.875rem; color: #777;">{{ Auth::user()->name }}</span>
        </div>
        <hr style="border-top: 5px solid #0077ff; flex-grow: 1; margin-left: 10px;">
    </div>

    <div class="loadingspinner">
        <div id="square1"></div>
        <div id="square2"></div>
        <div id="square3"></div>
        <div id="square4"></div>
        <div id="square5"></div>
    </div>

    <div class="cards-container">
        <div class="card blue-background">
            <div class="title">
                <span>
                    <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                </span>
                <p class="title-text">Followers</p>
                <p class="percent">20%</p>
            </div>
            <div class="data">
                <p>300</p>
                <div class="range">
                    <div class="fill" style="width: 60%;"></div>
                </div>
            </div>
        </div>

        <div class="card blue-background">
            <div class="title">
                <span>
                    <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                </span>
                <p class="title-text">Posts</p>
                <p class="percent">15%</p>
            </div>
            <div class="data">
                <p>200</p>
                <div class="range">
                    <div class="fill" style="width: 40%;"></div>
                </div>
            </div>
        </div>

        <div class="card blue-background">
            <div class="title">
                <span>
                    <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                </span>
                <p class="title-text">Events</p>
                <p class="percent">10%</p>
            </div>
            <div class="data">
                <p>100</p>
                <div class="range">
                    <div class="fill" style="width: 30%;"></div>
                </div>
            </div>
        </div>

        <div class="card blue-background">
            <div class="title">
                <span>
                    <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg>
                </span>
                <p class="title-text">Users</p>
                <p class="percent">50%</p>
            </div>
            <div class="data">
                <p>500</p>
                <div class="range">
                    <div class="fill" style="width: 50%;"></div>
                </div>
            </div>
        </div>

        <div class="card blue-background">
            <div class="title">
                <span>
                    <svg width="20" fill="currentColor" height="20" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="title-text">Budget</p>
                <p class="percent">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" fill="currentColor" height="20"
                        width="20">
                        <path
                            d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z">
                        </path>
                    </svg> 80%
                </p>
            </div>
            <div class="data">
                <p>20,000</p>
                <div class="range">
                    <div class="fill" style="width: 80%;"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="my-5 home-admin">
        <div class="card shadow border-0">

            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Recent Updates</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle w-100">
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">Followers</th>
                                <th scope="col">Posts</th>
                                <th scope="col">Events</th>
                                <th scope="col">Users</th>
                                <th scope="col">Budget</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>300</td>
                                <td>200</td>
                                <td>100</td>
                                <td>500</td>
                                <td><span class="badge bg-primary text-white">₱20,000</span></td>
                                <td>
                                    <button class="btn btn-primary rounded-pill fw-bold px-4 py-2" data-bs-toggle="modal"
                                        data-bs-target="#detailsModal"
                                        onclick="loadUserDetails('Jeriebel Calunsag', '123-2343-212')">
                                        View
                                    </button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                            <td>300</td>
                            <td>200</td>
                            <td>100</td>
                            <td>500</td>
                            <td><span class="badge bg-primary text-white">₱20,000</span></td>
                            <td>
                                <button class="btn btn-primary rounded-pill fw-bold px-4 py-2" data-bs-toggle="modal"
                                    data-bs-target="#detailsModal"
                                    onclick="loadUserDetails('Jeriebel Calunsag', '123-2343-212')">
                                    View
                                </button>
                            </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Footer -->
            <div class="card-footer bg-light text-center text-muted">
                <small>Records are Confidential.</small>
            </div>
        </div>
    </div>






    <!-- From Uiverse.io by Admin12121 -->
    <div class="scene">
        <div class="forest">
            <div class="tree tree1">
                <div class="branch branch-top"></div>
                <div class="branch branch-middle"></div>
            </div>

            <div class="tree tree2">
                <div class="branch branch-top"></div>
                <div class="branch branch-middle"></div>
                <div class="branch branch-bottom"></div>
            </div>

            <div class="tree tree3">
                <div class="branch branch-top"></div>
                <div class="branch branch-middle"></div>
                <div class="branch branch-bottom"></div>
            </div>

            <div class="tree tree4">
                <div class="branch branch-top"></div>
                <div class="branch branch-middle"></div>
                <div class="branch branch-bottom"></div>
            </div>

            <div class="tree tree5">
                <div class="branch branch-top"></div>
                <div class="branch branch-middle"></div>
                <div class="branch branch-bottom"></div>
            </div>

            <div class="tree tree6">
                <div class="branch branch-top"></div>
                <div class="branch branch-middle"></div>
                <div class="branch branch-bottom"></div>
            </div>

            <div class="tree tree7">
                <div class="branch branch-top"></div>
                <div class="branch branch-middle"></div>
                <div class="branch branch-bottom"></div>
            </div>
        </div>

        <div class="tent">
            <div class="roof"></div>
            <div class="roof-border-left">
                <div class="roof-border roof-border1"></div>
                <div class="roof-border roof-border2"></div>
                <div class="roof-border roof-border3"></div>
            </div>
            <div class="entrance">
                <div class="door left-door">
                    <div class="left-door-inner"></div>
                </div>
                <div class="door right-door">
                    <div class="right-door-inner"></div>
                </div>
            </div>
        </div>

        <div class="floor">
            <div class="ground ground1"></div>
            <div class="ground ground2"></div>
        </div>

        <div class="fireplace">
            <div class="support"></div>
            <div class="support"></div>
            <div class="bar"></div>
            <div class="hanger"></div>
            <div class="smoke"></div>
            <div class="pan"></div>
            <div class="fire">
                <div class="line line1">
                    <div class="particle particle1"></div>
                    <div class="particle particle2"></div>
                    <div class="particle particle3"></div>
                    <div class="particle particle4"></div>
                </div>
                <div class="line line2">
                    <div class="particle particle1"></div>
                    <div class="particle particle2"></div>
                    <div class="particle particle3"></div>
                    <div class="particle particle4"></div>
                </div>
                <div class="line line3">
                    <div class="particle particle1"></div>
                    <div class="particle particle2"></div>
                    <div class="particle particle3"></div>
                    <div class="particle particle4"></div>
                </div>
            </div>
        </div>

        <div class="time-wrapper">
            <div class="time">
                <div class="day"></div>
                <div class="night">
                    <div class="moon"></div>
                    <div class="star star1 star-big"></div>
                    <div class="star star2 star-big"></div>
                    <div class="star star3 star-big"></div>
                    <div class="star star4"></div>
                    <div class="star star5"></div>
                    <div class="star star6"></div>
                    <div class="star star7"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="card-footer bg-light text-center text-muted">
        <small>© CompED All Rights Reserved.</small>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".card");

            cards.forEach((card) => {
                const fill = card.querySelector(".fill");
                const number = card.querySelector(".data p");
                const percent = card.querySelector(".percent");

                let targetWidth = parseInt(fill.style.width); // Extract width from inline style
                let targetNumber = parseInt(number.textContent.replace(/,/g, "")) ||
                    0; // Handle commas in numbers
                let targetPercent = parseInt(percent.textContent.replace("%", "")) ||
                    0; // Extract percentage value

                fill.style.width = "0%"; // Start progress bar from 0
                number.textContent = "0"; // Start number from 0
                percent.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" fill="currentColor" height="20" width="20">
<path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z"></path>
</svg> 0%`; // Start percentage from 0%

                let duration = 2000; // Animation time (2 seconds)
                let frameRate = 30; // Update every 30ms
                let totalFrames = duration / frameRate;
                let widthIncrement = targetWidth / totalFrames;
                let numberIncrement = targetNumber / totalFrames;
                let percentIncrement = targetPercent / totalFrames;

                let currentWidth = 0;
                let currentNumber = 0;
                let currentPercent = 0;

                let interval = setInterval(() => {
                    if (currentWidth >= targetWidth && currentNumber >= targetNumber &&
                        currentPercent >= targetPercent) {
                        clearInterval(interval);
                        number.textContent = targetNumber
                            .toLocaleString(); // Ensure final number format
                        percent.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" fill="currentColor" height="20" width="20">
        <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z"></path>
    </svg> ${targetPercent}%`; // Ensure final percentage format
                    } else {
                        currentWidth += widthIncrement;
                        currentNumber += numberIncrement;
                        currentPercent += percentIncrement;

                        if (currentWidth > targetWidth) currentWidth = targetWidth;
                        if (currentNumber > targetNumber) currentNumber = targetNumber;
                        if (currentPercent > targetPercent) currentPercent = targetPercent;

                        fill.style.width = currentWidth + "%";
                        number.textContent = Math.floor(currentNumber)
                            .toLocaleString(); // Format with commas
                        percent.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" fill="currentColor" height="20" width="20">
        <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z"></path>
    </svg> ${Math.floor(currentPercent)}%`;
                    }
                }, frameRate);
            });
        });
    </script>

@endsection
