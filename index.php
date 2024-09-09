<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Policy Center</title>

    <link href="/src/styles/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="favicon.png">

    <meta name="description" content="Welcome to French Femboi's policy center! Find any policies you might need for my apps here!">
    <meta name="author" content="Policy Center">
    <meta content="#80BD7EFF" data-react-helmet="true" name="theme-color">
    <meta property="og:image" content="favicon.png">
</head>

<body class="bg-gray-900">

<div class="relative isolate overflow-hidden bg-gray-900">
    <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
      <defs>
        <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M.5 200V.5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
        <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
    </svg>
    <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]" aria-hidden="true">
      <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80fff9] to-[#61e546] opacity-20" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
      <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
        <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Policy Center</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">Find policies for all projects French Femboi has worked on and/or coded.</p>
      </div>
    </div>
  </div>

    <div class="container mx-auto px-6 py-10">
        <h2 class="text-2xl font-bold text-white mb-6">Policy list</h2>
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <table class="w-full border border-gray-700">
                <thead>
                    <tr>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Name</th>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Description</th>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Last Updated</th>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Policies</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 px-4 border-b border-gray-700 text-gray-300">CatKeys</td>
                        <td class="py-3 px-4 border-b border-gray-700 text-gray-300">Misskey client based on M3</td>
                        <td class="py-3 px-4 border-b border-gray-700">
                            <span class="inline-block py-1 px-2 rounded-full text-xs font-semibold text-green-200 bg-green-900">09/09/2024</span>
                        </td>
                        <td class="py-3 px-4 border-b border-gray-700 text-gray-300">
                            <a href="/catkeys-privacy" class="text-green-300 hover:text-green-100">PRIV</a> - 
                            <a href="/catkeys-tos" class="text-green-300 hover:text-green-100">TOS</a> - 
                            <a href="https://github.com/french-femboi/Catkeys" class="text-green-300 hover:text-green-100">GIT</a> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
                                            
  <?php include 'inc/footer.php'; ?>
</body>

</html>