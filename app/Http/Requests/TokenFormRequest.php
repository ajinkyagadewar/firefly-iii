<?php
/**
 * TokenFormRequest.php
 * Copyright (c) 2019 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace FireflyIII\Http\Requests;

/**
 * Class TokenFormRequest.
 *
 * @codeCoverageIgnore
 */
class TokenFormRequest extends Request
{
    /**
     * Verify the request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // Only allow logged in users
        return auth()->check();
    }

    /**
     * Rules for this request.
     *
     * @return array
     */
    public function rules(): array
    {
        // fixed
        return [
            'code' => 'required|2faCode',
        ];
    }
}
