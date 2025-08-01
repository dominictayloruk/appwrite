<?php

return [
    APP_PLATFORM_CLIENT => [
        'key' => APP_PLATFORM_CLIENT,
        'name' => 'Client',
        'description' => 'Client libraries for integrating with Appwrite to build client-based applications and websites. Read the [getting started for web](https://appwrite.io/docs/getting-started-for-web) or [getting started for Flutter](https://appwrite.io/docs/getting-started-for-flutter) tutorials to start building your first application.',
        'enabled' => true,
        'beta' => false,
        'sdks' => [
            [
                'key' => 'web',
                'name' => 'Web',
                'version' => '18.1.0',
                'url' => 'https://github.com/appwrite/sdk-for-web',
                'package' => 'https://www.npmjs.com/package/appwrite',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_CLIENT,
                'prism' => 'javascript',
                'source' => \realpath(__DIR__ . '/../sdks/client-web'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-web.git',
                'gitRepoName' => 'sdk-for-web',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
                'demos' => [
                    [
                        'icon' => 'react.svg',
                        'name' => 'Todo App with React JS',
                        'description' => 'A simple Todo app that uses both the Appwrite account and database APIs.',
                        'source' => 'https://github.com/appwrite/todo-with-react',
                        'url' => 'https://appwrite-todo-with-react.vercel.app/',
                    ],
                    [
                        'icon' => 'vue.svg',
                        'name' => 'Todo App with Vue JS',
                        'description' => 'A simple Todo app that uses both the Appwrite account and database APIs.',
                        'source' => 'https://github.com/appwrite/todo-with-vue',
                        'url' => 'https://appwrite-todo-with-vue.vercel.app/',
                    ],
                    [
                        'icon' => 'angular.svg',
                        'name' => 'Todo App with Angular',
                        'description' => 'A simple Todo app that uses both the Appwrite account and database APIs.',
                        'source' => 'https://github.com/appwrite/todo-with-angular',
                        'url' => 'https://appwrite-todo-with-angular.vercel.app/',
                    ],
                    [
                        'icon' => 'svelte.svg',
                        'name' => 'Todo App with Svelte',
                        'description' => 'A simple Todo app that uses both the Appwrite account and database APIs.',
                        'source' => 'https://github.com/appwrite/todo-with-svelte',
                        'url' => 'https://appwrite-todo-with-svelte.vercel.app/',
                    ],
                ]
            ],
            [
                'key' => 'flutter',
                'name' => 'Flutter',
                'version' => '17.0.2',
                'url' => 'https://github.com/appwrite/sdk-for-flutter',
                'package' => 'https://pub.dev/packages/appwrite',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_CLIENT,
                'prism' => 'dart',
                'source' => \realpath(__DIR__ . '/../sdks/client-flutter'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-flutter.git',
                'gitRepoName' => 'sdk-for-flutter',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'apple',
                'name' => 'Apple',
                'version' => '10.1.1',
                'url' => 'https://github.com/appwrite/sdk-for-apple',
                'package' => 'https://github.com/appwrite/sdk-for-apple',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_CLIENT,
                'prism' => 'swift',
                'source' => \realpath(__DIR__ . '/../sdks/client-apple'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-apple.git',
                'gitRepoName' => 'sdk-for-apple',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'objective-c',
                'name' => 'Objective C',
                'url' => '',
                'package' => '',
                'enabled' => false,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_CLIENT,
                'prism' => '',
                'source' => false,
                'gitUrl' => 'git@github.com:appwrite/sdk-for-objective-c.git',
                'gitRepoName' => 'sdk-for-objective-c',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'android',
                'name' => 'Android',
                'version' => '8.1.0',
                'url' => 'https://github.com/appwrite/sdk-for-android',
                'package' => 'https://search.maven.org/artifact/io.appwrite/sdk-for-android',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_CLIENT,
                'prism' => 'kotlin',
                'source' => \realpath(__DIR__ . '/../sdks/client-android'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-android.git',
                'gitRepoName' => 'sdk-for-android',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
                'docDirectories' => [
                    'Kotlin' => 'kotlin',
                    'Java' => 'java',
                ],
            ],
            [
                'key' => 'react-native',
                'name' => 'React Native',
                'version' => '0.10.1',
                'url' => 'https://github.com/appwrite/sdk-for-react-native',
                'package' => 'https://npmjs.com/package/react-native-appwrite',
                'enabled' => true,
                'beta' => true,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_CLIENT,
                'prism' => 'javascript',
                'source' => \realpath(__DIR__ . '/../sdks/client-react-native'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-react-native.git',
                'gitRepoName' => 'sdk-for-react-native',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'graphql',
                'name' => 'GraphQL',
                'version' => 'October 2021',
                'url' => '',
                'package' => '',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => true,
                'family' => APP_PLATFORM_CLIENT,
                'prism' => 'graphql',
                'source' => \realpath(__DIR__ . '/../sdks/client-graphql'),
                'gitUrl' => '',
                'gitRepoName' => '',
                'gitUserName' => '',
                'gitBranch' => '',
                'isSDK' => false,
            ],
            [
                'key' => 'rest',
                'name' => 'REST',
                'version' => '',
                'url' => '',
                'package' => '',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => true,
                'family' => APP_PLATFORM_CLIENT,
                'prism' => 'http',
                'source' => \realpath(__DIR__ . '/../sdks/client-rest'),
                'gitUrl' => '',
                'gitRepoName' => '',
                'gitUserName' => '',
                'gitBranch' => '',
                'isSDK' => false,
            ],
        ],
    ],

    APP_PLATFORM_CONSOLE => [
        'key' => APP_PLATFORM_CONSOLE,
        'name' => 'Console',
        'enabled' => false,
        'beta' => false,
        'sdks' => [
            [
                'key' => 'web',
                'name' => 'Console',
                'version' => '1.7.0',
                'url' => 'https://github.com/appwrite/sdk-for-console',
                'package' => '',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => true,
                'family' => APP_PLATFORM_CONSOLE,
                'prism' => 'javascript',
                'source' => \realpath(__DIR__ . '/../sdks/console-web'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-console.git',
                'gitBranch' => 'dev',
                'gitRepoName' => 'sdk-for-console',
                'gitUserName' => 'appwrite',
            ],
            [
                'key' => 'cli',
                'name' => 'Command Line',
                'version' => '8.2.2',
                'url' => 'https://github.com/appwrite/sdk-for-cli',
                'package' => 'https://www.npmjs.com/package/appwrite-cli',
                'enabled' => true,
                'beta' => true,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_CONSOLE,
                'prism' => 'bash',
                'source' => \realpath(__DIR__ . '/../sdks/console-cli'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-cli.git',
                'gitRepoName' => 'sdk-for-cli',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
                'repoBranch' => 'master',
                'exclude' => [
                    'services' => [
                        ['name' => 'assistant'],
                    ],
                ],
            ],
        ],
    ],

    APP_PLATFORM_SERVER => [
        'key' => APP_PLATFORM_SERVER,
        'name' => 'Server',
        'description' => 'Libraries for integrating with Appwrite to build server side integrations. Read the [getting started for server](https://appwrite.io/docs/getting-started-for-server) tutorial to start building your first server integration.',
        'enabled' => true,
        'beta' => false,
        'sdks' => [
            [
                'key' => 'nodejs',
                'name' => 'Node.js',
                'version' => '17.1.0',
                'url' => 'https://github.com/appwrite/sdk-for-node',
                'package' => 'https://www.npmjs.com/package/node-appwrite',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'javascript',
                'source' => \realpath(__DIR__ . '/../sdks/server-nodejs'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-node.git',
                'gitRepoName' => 'sdk-for-node',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'deno',
                'name' => 'Deno',
                'version' => '15.0.0',
                'url' => 'https://github.com/appwrite/sdk-for-deno',
                'package' => 'https://deno.land/x/appwrite',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'typescript',
                'source' => \realpath(__DIR__ . '/../sdks/server-deno'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-deno.git',
                'gitRepoName' => 'sdk-for-deno',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'php',
                'name' => 'PHP',
                'version' => '15.0.0',
                'url' => 'https://github.com/appwrite/sdk-for-php',
                'package' => 'https://packagist.org/packages/appwrite/appwrite',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'php',
                'source' => \realpath(__DIR__ . '/../sdks/server-php'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-php.git',
                'gitRepoName' => 'sdk-for-php',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'python',
                'name' => 'Python',
                'version' => '11.0.0',
                'url' => 'https://github.com/appwrite/sdk-for-python',
                'package' => 'https://pypi.org/project/appwrite/',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'python',
                'source' => \realpath(__DIR__ . '/../sdks/server-python'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-python.git',
                'gitRepoName' => 'sdk-for-python',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'ruby',
                'name' => 'Ruby',
                'version' => '16.0.0',
                'url' => 'https://github.com/appwrite/sdk-for-ruby',
                'package' => 'https://rubygems.org/gems/appwrite',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'ruby',
                'source' => \realpath(__DIR__ . '/../sdks/server-ruby'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-ruby.git',
                'gitRepoName' => 'sdk-for-ruby',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'go',
                'name' => 'Go',
                'version' => '0.8.0',
                'url' => 'https://github.com/appwrite/sdk-for-go',
                'package' => 'https://github.com/appwrite/sdk-for-go',
                'enabled' => true,
                'beta' => true,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'go',
                'source' => \realpath(__DIR__ . '/../sdks/server-go'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-go.git',
                'gitRepoName' => 'sdk-for-go',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'dotnet',
                'name' => '.NET',
                'version' => '0.14.0',
                'url' => 'https://github.com/appwrite/sdk-for-dotnet',
                'package' => 'https://www.nuget.org/packages/Appwrite',
                'enabled' => true,
                'beta' => true,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'csharp',
                'source' => \realpath(__DIR__ . '/../sdks/server-dotnet'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-dotnet.git',
                'gitRepoName' => 'sdk-for-dotnet',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'dart',
                'name' => 'Dart',
                'version' => '16.1.0',
                'url' => 'https://github.com/appwrite/sdk-for-dart',
                'package' => 'https://pub.dev/packages/dart_appwrite',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'dart',
                'source' => \realpath(__DIR__ . '/../sdks/server-dart'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-dart.git',
                'gitRepoName' => 'sdk-for-dart',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'kotlin',
                'name' => 'Kotlin',
                'version' => '9.0.0',
                'url' => 'https://github.com/appwrite/sdk-for-kotlin',
                'package' => 'https://search.maven.org/artifact/io.appwrite/sdk-for-kotlin',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'kotlin',
                'source' => \realpath(__DIR__ . '/../sdks/server-kotlin'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-kotlin.git',
                'gitRepoName' => 'sdk-for-kotlin',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
                'docDirectories' => [
                    'Kotlin' => 'kotlin',
                    'Java' => 'java',
                ],
            ],
            [
                'key' => 'swift',
                'name' => 'Swift',
                'version' => '10.1.0',
                'url' => 'https://github.com/appwrite/sdk-for-swift',
                'package' => 'https://github.com/appwrite/sdk-for-swift',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => false,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'swift',
                'source' => \realpath(__DIR__ . '/../sdks/server-swift'),
                'gitUrl' => 'git@github.com:appwrite/sdk-for-swift.git',
                'gitRepoName' => 'sdk-for-swift',
                'gitUserName' => 'appwrite',
                'gitBranch' => 'dev',
            ],
            [
                'key' => 'graphql',
                'name' => 'GraphQL',
                'version' => 'October 2021',
                'url' => '',
                'package' => '',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => true,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'graphql',
                'source' => \realpath(__DIR__ . '/../sdks/server-graphql'),
                'gitUrl' => '',
                'gitRepoName' => '',
                'gitUserName' => '',
                'gitBranch' => '',
                'isSDK' => false,
            ],
            [
                'key' => 'rest',
                'name' => 'REST',
                'version' => '',
                'url' => '',
                'package' => '',
                'enabled' => true,
                'beta' => false,
                'dev' => false,
                'hidden' => true,
                'family' => APP_PLATFORM_SERVER,
                'prism' => 'http',
                'source' => \realpath(__DIR__ . '/../sdks/server-rest'),
                'gitUrl' => '',
                'gitRepoName' => '',
                'gitUserName' => '',
                'gitBranch' => '',
                'isSDK' => false,
            ],
        ],
    ],
];
