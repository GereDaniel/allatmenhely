<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fradisták Az Állatokért</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              text: "var(--text)",
              background: "var(--background)",
              primary: "var(--primary)",
              secondary: "var(--secondary)",
              accent: "var(--accent)",
            },
          },
        },
      };
    </script>
    <link rel="icon" type="image/x-icon" href="images/logo.png" />
    <style type="text/tailwindcss">
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
        .cella {
          @apply flex-grow bg-secondary rounded-lg p-5 mb-4;
        }
        .section {
        }
      }
      @layer base {
        :root {
          --text: #ffd899;
          --background: #131313;
          --primary: #1e6726;
          --secondary: #61a352;
          --accent: #dfa553;
        }
      }
    </style>
  </head>

  <body class="bg-background min-h-screen pt-[114px]">
    <!--  
        Rezponzív?
        Telefonon meglehessen nézni normálisan
        Email: fradistakazallatokert@gmail.com       
        állatokat lopni
        <hamis hírek3
        Bedi fogalmazás -> hogyan segíthetünk
    -->

    <nav class="p-4 border-b-2 border-accent absolute top-0 left-0 w-full">
      <div class="text-text container mx-auto flex justify-between">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="images/logo.png" alt="Logó" class="w-20" />
          <a href="https://www.facebook.com/fradistakazallatokert/">
            <span class="text-2xl font-bold text-accent"
              >Fradisták Az Állatokért</span
            ></a
          >
        </div>
        <div class="max-sm:absolute right-5 top-5">
          <div class="w-20 h-2 bg-white"></div>
          <div class=""></div>
          <div class=""></div>
        </div>
        <!-- az legyen aláhúzva amelyik témát a felhasználó látja -->
          <div class="items-center text-lg flex space-x-6">
              <a href="index.php">Fooldal</a>
              <a href="supporters.php">Támogatóink</a>
              <a href="about.php">Rólunk</a>
              <a href="donation.php">Adományozás</a>
              <a href="volunteer.php">Jelentkezz önkéntesnek</a>
          </div>
      </div>
    </nav>

    <!-- KÉPEK -->

    <div class="container mx-auto flex flex-row m-6 p-4 w-full h-screen">
      <div
        class="p-5 flex flex-col basis-1/2 bg-primary rounded-lg mr-6 min-h-[900px]"
      >
        <h1 class="text-lg text-white mb-8 border-b-2 border-secondary">
          Fogadj örökbe!
        </h1>
        <div class="flex flex-col flex-grow">
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
        </div>
      </div>

      <!-- FOGALMAZÁS -->

      <div
        class="flex-grow flex flex-col p-5 basis-1/2 bg-primary rounded-lg mr-6 min-h-[900px]"
      >
        <h1 class="text-lg text-white mb-8 border-b-2 border-secondary">
          Hogyan segíthettek
        </h1>
        <div class="flex flex-col flex-grow">
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
        </div>
      </div>

      <!-- LE HÍREK -->

      <div
        class="flex flex-col p-5 basis-1/4 bg-primary rounded-lg h-full flex-grow min-h-[900px]"
      >
        <h1 class="text-lg text-white mb-8 border-b-2 border-secondary">
          Hírek
        </h1>
        <div class="flex flex-col flex-grow">
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>