import { PrismaClient } from '@prisma/client';
import { PrismaNeon } from '@prisma/adapter-neon';
import Image from 'next/image';

const prisma = new PrismaClient({
    adapter: new PrismaNeon({
        connectionString: process.env.DATABASE_URL!,
    })
})

export default async function GamesInfo() {
    const games = await prisma.game.findMany({
        include: { console: true },
    })

    return (
        <div className='w-full'>
            <div className='mb-12'>
                <h1 className='text-5xl font-bold text-white mb-2'>Games</h1>
                <div className='h-1 w-24 bg-gradient-to-r from-blue-500 to-purple-500 rounded'></div>
            </div>

            <div className='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6'>
{games.map((game) => {
    const rawCover = typeof game.cover === 'string' ? game.cover.trim() : '';
    const coverSrc = rawCover
        ? rawCover.startsWith('/') || rawCover.startsWith('http')
            ? rawCover
            : `/${rawCover}`
        : '/imgs/no-cover.svg';

    return (
        <div
            key={game.id}
            className='group bg-gray-900 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 cursor-pointer'
        >
            {/* Game Cover Image */}
            <div className='relative h-64 bg-gray-800 overflow-hidden'>
                <Image 
                    src={coverSrc}
                    alt={game.title}
                    fill
                    className='object-cover group-hover:scale-110 transition-transform duration-300'
                />
                <div className='absolute inset-0 bg-gradient-to-t from-black/80 to-transparent'></div>
            </div>

            {/* Game Info */}
            <div className='p-4'>
                <h3 className='text-lg font-bold text-white mb-2 line-clamp-2 group-hover:text-blue-400 transition-colors'>
                    {game.title}
                </h3>
                
                <div className='flex items-center gap-2 mb-3'>
                    <span className='px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full'>
                        {game.console.name}
                    </span>
                </div>

                <p className='text-gray-400 text-sm mb-3 line-clamp-2'>
                    {game.genre}
                </p>

                <div className='flex justify-between items-center'>
                    <span className='text-green-400 font-bold text-lg'>
                        ${game.price}
                    </span>
                    <span className='text-gray-500 text-xs'>
                        {game.developer}
                    </span>
                </div>
            </div>
        </div>
    )
})}
            </div>

            {games.length === 0 && (
                <div className='text-center py-12'>
                    <p className='text-gray-400 text-xl'>No games found</p>
                </div>
            )}
        </div>
    )
}
