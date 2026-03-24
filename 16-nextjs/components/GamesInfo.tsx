import { PrismaClient } from "@prisma/client";
import { PrismaNeon } from "@prisma/adapter-neon";
import Image from "next/image";
import Link from "next/link";

const prisma = new PrismaClient({
    adapter: new PrismaNeon({
        connectionString: process.env.DATABASE_URL!,
    }),
});

type GamesInfoProps = {
    searchParams?: Promise<{
        page?: string;
    }>;
};

export default async function GamesInfo({ searchParams }: GamesInfoProps) {
    const params = await searchParams;
    const currentPage = Number(params?.page) > 0 ? Number(params?.page) : 1;
    const itemsPerPage = 10;

    const totalGames = await prisma.game.count();
    const totalPages = Math.ceil(totalGames / itemsPerPage);

    const games = await prisma.game.findMany({
        include: { console: true },
        skip: (currentPage - 1) * itemsPerPage,
        take: itemsPerPage,
        orderBy: {
            id: "asc",
        },
    });

    return (
        <div>
            <h1 className="text-4xl text-white-400 border-b-2 pb-2 mb-8">Games</h1>

            <div className="flex flex-wrap gap-4 justify-center items-center">
                {games.map((game) => (
                    <div
                        key={game.id}
                        className="card bg-black-100 w-96 h-[420px] shadow-sm flex flex-col border-2 border-white-400"
                    >
                        <figure className="w-full h-60 relative">
                            <Image
                                src={`/imgs/${game.cover}`}
                                alt={game.title}
                                fill
                                className="object-cover"
                            />
                        </figure>

                        <div className="card-body flex flex-col justify-between bg-black/40 text-white">
                            <h4 className="text-purple-400">US$ {game.price}</h4>
                            <h2 className="card-title">{game.title}</h2>
                            <h4 className="text-white/60">
                                Disponible para {game.console.name}
                            </h4>
                            <h4 className="text-white/60">Genre: {game.genre}</h4>

                            <div className="card-actions flex items-center gap-2">
                                <div className="btn btn-outline btn-warning">Edit</div>
                                <div className="btn btn-outline btn-info">View</div>
                                <div className="btn btn-outline btn-error">Delete</div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>

            <div className="flex justify-center items-center gap-3 mt-8">
                <Link
                    href={`/games?page=${currentPage - 1}`}
                    className={`btn btn-outline ${currentPage <= 1 ? "pointer-events-none opacity-50" : ""
                        }`}
                >
                    Previous
                </Link>

                <span className="text-white">
                    Página {currentPage} de {totalPages}
                </span>

                <Link
                    href={`/games?page=${currentPage + 1}`}
                    className={`btn btn-outline ${currentPage >= totalPages ? "pointer-events-none opacity-50" : ""
                        }`}
                >
                    Next
                </Link>
            </div>
        </div>
    );
}