<?php include('nav.php'); ?>

      <main>
        <!--
        - #HOME SECTION
      -->

        <section class="home" id="home">
          <div class="home-img-box">
            <img
              src="./img/home.png"
              alt="Image for Unity Bank Banner"
              class="home-img"
              width="100%"
            />
          </div>

          <div class="wrapper">
            <h1 class="home-title">Next generation digital banking</h1>

            <p class="home-text">
              Take your financial life online. Your Unity Bank account will be a
              one-stop-shop for spending, saving, budgeting, investing, and much
              more.
            </p>

            <button class="btn-primary">Know More</button>
          </div>
        </section>

        <!--
        - #SERVICE SECTION
      -->

        <section class="service" id="about">
          <h2 class="section-title">Why choose Unity Bank?</h2>

          <p class="section-text">
            We leverage Open Banking to turn your bank account into your
            financial hub. Control your finances like never before.
          </p>

          <div class="service-card-group">
            <div class="service-card">
              <img
                src="./images/icon-online.svg"
                alt="Icon for online banking"
                class="card-icon"
              />

              <h3 class="card-title">Online Banking</h3>

              <p class="card-text">
                Our modern web and mobile applications allow you to keep track
                of your finances wherever you are in the world.
              </p>
            </div>

            <div class="service-card">
              <img
                src="./images/icon-budgeting.svg"
                alt="Icon for Simple Budgeting"
                class="card-icon"
              />

              <h3 class="card-title">Simple Budgeting</h3>

              <p class="card-text">
                See exactly where your money goes each month. Receive
                notifications when you’re close to hitting your limits.
              </p>
            </div>

            <div class="service-card">
              <img
                src="./images/icon-onboarding.svg"
                alt="Icon for Fast Onboarding"
                class="card-icon"
              />

              <h3 class="card-title">Fast Onboarding</h3>

              <p class="card-text">
                We don’t do branches. Open your account in minutes online and
                start taking control of your finances right away.
              </p>
            </div>

            <div class="service-card">
              <img
                src="./images/icon-api.svg"
                alt="Icon for Open API"
                class="card-icon"
              />

              <h3 class="card-title">Open API</h3>

              <p class="card-text">
                Manage your savings, investments, pension, and much more from
                one account. Tracking your money has never been easier.
              </p>
            </div>
          </div>
        </section>

        <!--
        - #BLOG SECTION
      -->

        <section class="blog" id="WorkDesk">
          <h2 class="section-title">Work Desk</h2>

          <div class="article-card-group">
            <article class="article-card">
              <div class="card-head">
                <img
                  src="./img/users.png"
                  alt="Banner Image for Receive money in any currency with no fees"
                  class="card-img"
                />
              </div>

              <div class="card-body">
                <h3 class="card-title">
                  <a href="transfer_money.php">User Info</a>
                </h3>

                <p class="card-text">
                  Check the User Info and the Balance by clicking the below
                  button.
                </p>
                <div class="btn-div">
                  <button class="btn-primary"> <a href="users.php">Check</a></button>
                </div>
              </div>
            </article>

            <article class="article-card">
              <div class="card-head">
                <img
                  src="./img/send_money.png"
                  alt="Banner Image for Treat yourself without worrying about money"
                  class="card-img"
                />
              </div>

              <div class="card-body">
                <h3 class="card-title">
                  <a href="transfer_money.php">Send Money</a>
                </h3>

                <p class="card-text">
                  Click the below button to transfer money to any other account
                  .
                </p>
                <div class="btn-div">
                  <button class="btn-primary"> <a href="transfer_money.php">Transfer</a></button>
                </div>
              </div>
            </article>

            <article class="article-card">
              <div class="card-head">
                <img
                  src="./img/transfer.png"
                  alt="Banner Image for Take your Unity Bank card wherever you go"
                  class="card-img"
                />
              </div>

              <div class="card-body">
                <h3 class="card-title">
                  <a href="transactionhistory.php">Transfer History</a>
                </h3>

                <p class="card-text">
                  Click the below button to check transfer History .
                </p>
                <div class="btn-div">
                  <button class="btn-primary"><a href="transactionhistory.php">View</a></button>
                </div>
              </div>
            </article>
          </div>
        </section>
      </main>
      <?php include('footer.php'); ?>