import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Index(auth) {
    console.log(auth);

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-6">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {/* Two-column layout for issues */}
                    <div className="mb-3 grid grid-cols-1 md:grid-cols-2 gap-6">
                        {/* Column for Today's Issues */}
                        <div className="bg-white shadow-sm sm:rounded-lg dark:bg-gray-800 p-6">
                            <h3 className="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Today's Issues
                            </h3>
                            <ul className="mt-4 space-y-2 text-gray-700 dark:text-gray-300">
                                <li>Issue 1 - Description of issue</li>
                                <li>Issue 2 - Description of issue</li>
                                {/* Add more issues here */}
                            </ul>
                        </div>

                        {/* Column for Previous Issues */}
                        <div className="bg-white shadow-sm sm:rounded-lg dark:bg-gray-800 p-6">
                            <h3 className="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Previous Issues
                            </h3>
                            <ul className="mt-4 space-y-2 text-gray-700 dark:text-gray-300">
                                <li>Issue A - Description of issue</li>
                                <li>Issue B - Description of issue</li>
                                {/* Add more previous issues here */}
                            </ul>
                        </div>
                    </div>

                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            You're logged in As Product!
                        </div>
                    </div>
                </div>
            </div>

        </AuthenticatedLayout>
    );
}
